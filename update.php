<?php

declare(strict_types=1);

// Copyright (c) 2022 Ne-Lexa <alexey@nelexa.ru>

use Github\AuthMethod;
use Github\Client;
use JetBrains\PhpStorm\ArrayShape;

require 'vendor/autoload.php';

$accessToken = getenv('ACCESS_TOKEN');
$method = AuthMethod::ACCESS_TOKEN;

$githubClient = new Client();
$githubClient->authenticate($accessToken, null, $method);

(new class($githubClient) {
    private const USERNAME = 'Ne-Lexa';

    private const BADGE_COLOR = '343b41';

    private const BADGE_STYLE = 'flat-square';

    public function __construct(private Client $githubClient)
    {
    }

    public function __invoke(): void
    {
        $user = $this->getUser();
        $repositories = $this->getRepositories();
        $age = (int) date('Y') - (int) date('Y', 526791600);

        if (date('md', 526791600) > date('md')) {
            $age--;
        }

        ['headers' => $tableHeaders, 'rows' => $tableRows] = $this->buildRepoTable($repositories);

        $readme = $this->render(__DIR__ . '/readme.tpl.php', compact('tableHeaders', 'tableRows', 'user', 'age'));
        $readme = rtrim($readme) . \PHP_EOL;

        $contents = $this->githubClient->repo()->contents();
        $currentReadmeFile = $contents->show(self::USERNAME, self::USERNAME, 'README.md');
        $currentReadmeFileContent = $currentReadmeFile['content'];

        if ($currentReadmeFile['encoding'] === 'base64') {
            $currentReadmeFileContent = base64_decode($currentReadmeFileContent, true);
        }

        if ($currentReadmeFileContent !== $readme) {
            $sha = $currentReadmeFile['sha'];
            $contents->update(self::USERNAME, self::USERNAME, 'README.md', $readme, 'Update profile', $sha);
        }
    }

    private function getRepositories(): array
    {
        $repositories = $this->githubClient->user()->repositories(self::USERNAME, 'owner');
        $repositories = array_filter(
            $repositories,
            static fn (array $repo) => $repo['fork'] === false && $repo['name'] !== self::USERNAME
        );
        usort($repositories, static function (array $repoA, array $repoB) {
            $cmp = $repoB['stargazers_count'] <=> $repoA['stargazers_count'];

            if ($cmp === 0) {
                $cmp = $repoB['forks_count'] <=> $repoA['forks_count'];

                if ($cmp === 0) {
                    $cmp = $repoA['id'] <=> $repoB['id'];
                }
            }

            return $cmp;
        });

        array_walk($repositories, [$this, 'appendRepositoryInfo']);

        return $repositories;
    }

    private function getUser(): array
    {
        return $this->githubClient->user()->show(self::USERNAME);
    }

    public function appendRepositoryInfo(array &$repository): void
    {
        if ($repository['language'] === 'PHP') {
            $this->appendRepositoryInfoForPhp($repository);
        }

        $this->appendActionsBadge($repository);
    }

    private function appendRepositoryInfoForPhp(array &$repository): void
    {
        $path = 'composer.json';

        if (!$this->githubClient->repo()->contents()->exists(
            $repository['owner']['login'],
            $repository['name'],
            $path
        )) {
            return;
        }

        $composerJsonContents = $this->githubClient->repo()->contents()->show(
            $repository['owner']['login'],
            $repository['name'],
            $path
        );

        $content = $composerJsonContents['content'];

        if ($composerJsonContents['encoding'] === 'base64') {
            $content = base64_decode($content, true);

            if ($content === false) {
                throw new \RuntimeException('Error base64 decode file ' . $composerJsonContents['url']);
            }
        }

        $repositoryFullName = $repository['full_name'];

        $repository['extra']['badges'] = [
            'stars' => $this->createBadge('Stars', 'github/stars/' . $repositoryFullName),
            'forks' => $this->createBadge('Forks', 'github/forks/' . $repositoryFullName),
            'issues' => $this->createBadge('Issues', 'github/issues/' . $repositoryFullName),
            'pr' => $this->createBadge('Pull Requests', 'github/issues-pr/' . $repositoryFullName),
        ];

        try {
            $json = json_decode($content, true, 512, \JSON_THROW_ON_ERROR);

            $platforms[] = $repository['language'];

            if (isset($json['name'])) {
                $repository['extra']['type'] = 'php';
                $composerPackageName = $json['name'];
                $repository['extra']['name'] = $composerPackageName;

                if (isset($json['type'])) {
                    $repository['extra']['composerType'] = $json['type'];
                    $platforms[] = $repository['extra']['composerType'];
                }

                $packagistUrl = 'https://packagist.org/packages/' . $composerPackageName;

                $repository['extra']['badges']['downloads'] = $this->createBadge(
                    'Packagist Downloads',
                    'packagist/dt/' . $composerPackageName,
                    $packagistUrl
                );
                $repository['extra']['badges']['version'] = $this->createBadge(
                    'Packagist Version',
                    'packagist/v/' . $composerPackageName,
                    $packagistUrl
                );
                $repository['extra']['badges']['license'] = $this->createBadge(
                    'License',
                    'packagist/l/' . $composerPackageName,
                    $packagistUrl
                );
            }
            $platforms[] = 'blueviolet';

            $platformPath = implode(
                '-',
                array_map(static fn (string $platform) => str_replace(['-', ' '], ['--', '__'], $platform), $platforms)
            );

            $repository['extra']['badges']['platform'] = '<img alt="Platform" src="https://img.shields.io/badge/' . rawurlencode($platformPath) . '"/>';
        } catch (\JsonException $e) {
            throw new \RuntimeException('Error json decode content "' . $content . '"', 0, $e);
        }
    }

    private function appendActionsBadge(array &$repository): void
    {
        $readme = $this->githubClient->repo()->readme($repository['owner']['login'], $repository['name']);

        if (
            !empty($readme)
            && is_string($readme)
            && preg_match('~https://github.com/.*?/workflows/.*?/badge\.svg~', $readme, $matches)
        ) {
            $workflowSvgBadge = $matches[0];
            $repository['extra']['badges']['actions'] = '<a href="https://github.com/' . $repository['full_name'] . '/actions" target="_blank"><img src="' . $workflowSvgBadge . '" alt="Build Status"/></a>';
        } else {
            $repository['extra']['badges']['actions'] = '';
        }
    }

    private function createBadge(string $title, string $path, ?string $url = null): string
    {
        $badge = '';

        if ($url !== null) {
            $badge .= '<a href="' . $url . '" target="_blank">';
        }

        $badge .= '<img alt="' . htmlspecialchars($title) . '" src="https://img.shields.io/' . $path
            . '?style=' . self::BADGE_STYLE . '&amp;labelColor=' . self::BADGE_COLOR . '"/>';

        if ($url !== null) {
            $badge .= '</a>';
        }

        return $badge;
    }

    private function render(string $templateFile, array $vars): string
    {
        extract($vars, \EXTR_OVERWRITE);
        ob_start();

        require $templateFile;

        return ob_get_clean();
    }

    #[ArrayShape(['headers' => 'string[]', 'rows' => 'array[]'])]
    private function buildRepoTable(array $repositories): array
    {
        $headers = [
            '🎁 Projects',
            '⭐ Stars',
            '📚 Forks',
            '🛎 Issues',
            '📬 Pull requests',
            '⬇️ Downloads',
            '#️⃣ Version',
            '🆓 License',
        ];
        $rows = array_map(static function (array $repository) {
            return [
                'cols' => [
                    $repository['extra']['badges']['stars'],
                    $repository['extra']['badges']['forks'],
                    $repository['extra']['badges']['issues'],
                    $repository['extra']['badges']['pr'],
                    $repository['extra']['badges']['downloads'] ?? '',
                    $repository['extra']['badges']['version'] ?? '',
                    $repository['extra']['badges']['license'] ?? '',
                ],
                'title' => '<a href="' . $repository['html_url'] . '"><b>' . htmlspecialchars(
                    $repository['full_name']
                ) . '</b></a><br/>' . $repository['extra']['badges']['platform'] . '<br/>'
                    . $repository['extra']['badges']['actions'],
                'description' => $repository['description'] ?? '',
            ];
        }, $repositories);

        return [
            'headers' => $headers,
            'rows' => $rows,
        ];
    }
})();
