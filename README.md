<h1 align="center">Привет! I'm Pisarev Alexey & I ❤ code.</h1>

<h2 align="center">Fullstack developer (PHP, JavaScript, React, Java, Bash)</h2>

```php
<?php

declare(strict_types=1);

namespace Nelexa;

final class MyProfile implements UserProfile
{
    public readonly int $id;
    public readonly string $name;
    public readonly string $username;
    public readonly int $age;

    public function __construct()
    {
        $this->id = 17830391;
        $this->name = 'Pisarev Alexey';
        $this->username = 'Ne-Lexa';
        $this->age = 35;
    }

    public function getSkills(): array
    {
        return [
            \Language\Php::class => ['versions' => '^4 | ^5 | ^7 | ^8'],
            \Language\Javascript::class => ['versions' => 'ES3 | ES5 | ES6 | ES7 | ES8 | ES9 | ES 10 | ES11'],
            \Language\Typescript::class => ['versions' => '^4'],
            \Language\Html::class => ['versions' => '^4 | ^5 | dev-xhtml | dev-wml'],
            \Language\Css::class => ['versions' => '^2 | ^3'],
            \Language\Scss::class => ['versions' => '*'],
            \Language\Java::class => ['versions' => '5 - 11'],
            \Language\Bash::class => ['versions' => '^4 | ^5'],
            \Language\Xml::class => ['versions' => '*'],
            \Language\Json::class => ['versions' => '*'],

            \Framework\Backend\Php\Symfony::class => ['versions' => '^3 | ^4 | ^5 | ^6'],
            \Framework\Backend\Php\Yii::class => ['versions' => '~1.1 | ~2.0'],
            \Framework\Frontend\Javascript\React::class => ['versions' => '^16.13 | ^17'],
            \Framework\Fullstack\NextJS::class => ['versions' => '^10.2'],

            \Frontend\Webpack::class => ['versions' => '^4 | ^5'],
            \Frontend\Gulp::class => ['versions' => '^3.9 | ^4.0'],

            \Database\MySQL::class => ['versions' => '~5.1 | ~5.5 | ~5.7 | ^8.0'],
            \Database\SQLite::class => ['versions' => '^3.8'],
            \Database\MongoDB::class => ['versions' => '^2.2 | ^3.0 | ^4.0'],

            \Platform\Android::class => ['versions' => '>= 2.1'],
        ];
    }

    public function __toString(): string
    {
        return $this->username;
    }
}
```

<h2>📝 My repositories:</h2>

<table>
    <thead align="center">
        <tr style="border: none">
                        <th>🎁 Project</th>
                        <th>⬇️ Downloads</th>
                        <th>⭐ Stars</th>
                        <th>📚 Forks</th>
                        <th>🛎 Issues</th>
                        <th>📬 Pull requests</th>
                    </tr>
    </thead>
    <tbody>
            <tr>
            <td rowspan="2">
                <a href="https://github.com/Ne-Lexa/php-zip"><b>Ne-Lexa/php-zip</b></a><br/><img alt="Platform" src="https://img.shields.io/badge/PHP-library-blueviolet"/><br/><a href="https://packagist.org/packages/nelexa/zip" target="_blank"><img alt="Packagist Version" src="https://img.shields.io/packagist/v/nelexa/zip?style=flat-square&amp;labelColor=343b41"/></a><br/><a href="https://github.com/Ne-Lexa/php-zip/actions" target="_blank"><img src="https://github.com/Ne-Lexa/php-zip/workflows/build/badge.svg" alt="Build Status"/></a><br/>🕐 created 5 years ago<br/>🕐 updated 5 months ago            </td>
                        <td><a href="https://packagist.org/packages/nelexa/zip" target="_blank"><img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/nelexa/zip?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/php-zip" target="_blank"><img alt="Stars" src="https://img.shields.io/github/stars/Ne-Lexa/php-zip?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/php-zip" target="_blank"><img alt="Forks" src="https://img.shields.io/github/forks/Ne-Lexa/php-zip?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/php-zip/issues" target="_blank"><img alt="Issues" src="https://img.shields.io/github/issues/Ne-Lexa/php-zip?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/php-zip/pulls" target="_blank"><img alt="Pull Requests" src="https://img.shields.io/github/issues-pr/Ne-Lexa/php-zip?style=flat-square&amp;labelColor=343b41"/></a></td>
                    </tr>
        <tr>
            <td colspan="5">
                <p>PhpZip is a php-library for extended work with ZIP-archives.</p>
            </td>
        </tr>
            <tr>
            <td rowspan="2">
                <a href="https://github.com/Ne-Lexa/php-byte-buffer"><b>Ne-Lexa/php-byte-buffer</b></a><br/><img alt="Platform" src="https://img.shields.io/badge/PHP-library-blueviolet"/><br/><a href="https://packagist.org/packages/nelexa/buffer" target="_blank"><img alt="Packagist Version" src="https://img.shields.io/packagist/v/nelexa/buffer?style=flat-square&amp;labelColor=343b41"/></a><br/>🕐 created 5 years ago<br/>🕐 updated 1 year ago            </td>
                        <td><a href="https://packagist.org/packages/nelexa/buffer" target="_blank"><img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/nelexa/buffer?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/php-byte-buffer" target="_blank"><img alt="Stars" src="https://img.shields.io/github/stars/Ne-Lexa/php-byte-buffer?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/php-byte-buffer" target="_blank"><img alt="Forks" src="https://img.shields.io/github/forks/Ne-Lexa/php-byte-buffer?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/php-byte-buffer/issues" target="_blank"><img alt="Issues" src="https://img.shields.io/github/issues/Ne-Lexa/php-byte-buffer?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/php-byte-buffer/pulls" target="_blank"><img alt="Pull Requests" src="https://img.shields.io/github/issues-pr/Ne-Lexa/php-byte-buffer?style=flat-square&amp;labelColor=343b41"/></a></td>
                    </tr>
        <tr>
            <td colspan="5">
                <p>Reading And Writing Binary Data (incl. primitive types, ex. byte, ubyte, short, ushort, int, uint, long, float, double). The classes also help with porting the I/O operations of the JAVA code.</p>
            </td>
        </tr>
            <tr>
            <td rowspan="2">
                <a href="https://github.com/Ne-Lexa/google-play-scraper"><b>Ne-Lexa/google-play-scraper</b></a><br/><img alt="Platform" src="https://img.shields.io/badge/PHP-library-blueviolet"/><br/><a href="https://packagist.org/packages/nelexa/google-play-scraper" target="_blank"><img alt="Packagist Version" src="https://img.shields.io/packagist/v/nelexa/google-play-scraper?style=flat-square&amp;labelColor=343b41"/></a><br/><a href="https://github.com/Ne-Lexa/google-play-scraper/actions" target="_blank"><img src="https://github.com/Ne-Lexa/google-play-scraper/workflows/build/badge.svg" alt="Build Status"/></a><br/>🕐 created 3 years ago<br/>🕐 updated 2 months ago            </td>
                        <td><a href="https://packagist.org/packages/nelexa/google-play-scraper" target="_blank"><img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/nelexa/google-play-scraper?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/google-play-scraper" target="_blank"><img alt="Stars" src="https://img.shields.io/github/stars/Ne-Lexa/google-play-scraper?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/google-play-scraper" target="_blank"><img alt="Forks" src="https://img.shields.io/github/forks/Ne-Lexa/google-play-scraper?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/google-play-scraper/issues" target="_blank"><img alt="Issues" src="https://img.shields.io/github/issues/Ne-Lexa/google-play-scraper?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/google-play-scraper/pulls" target="_blank"><img alt="Pull Requests" src="https://img.shields.io/github/issues-pr/Ne-Lexa/google-play-scraper?style=flat-square&amp;labelColor=343b41"/></a></td>
                    </tr>
        <tr>
            <td colspan="5">
                <p>PHP scraper to get data from Google Play </p>
            </td>
        </tr>
            <tr>
            <td rowspan="2">
                <a href="https://github.com/Ne-Lexa/php-crossplane"><b>Ne-Lexa/php-crossplane</b></a><br/><img alt="Platform" src="https://img.shields.io/badge/PHP-library-blueviolet"/><br/><a href="https://packagist.org/packages/nelexa/crossplane" target="_blank"><img alt="Packagist Version" src="https://img.shields.io/packagist/v/nelexa/crossplane?style=flat-square&amp;labelColor=343b41"/></a><br/><a href="https://github.com/Ne-Lexa/php-crossplane/actions" target="_blank"><img src="https://github.com/Ne-Lexa/php-crossplane/workflows/build/badge.svg" alt="Build Status"/></a><br/>🕐 created 11 months ago<br/>🕐 updated 3 months ago            </td>
                        <td><a href="https://packagist.org/packages/nelexa/crossplane" target="_blank"><img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/nelexa/crossplane?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/php-crossplane" target="_blank"><img alt="Stars" src="https://img.shields.io/github/stars/Ne-Lexa/php-crossplane?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/php-crossplane" target="_blank"><img alt="Forks" src="https://img.shields.io/github/forks/Ne-Lexa/php-crossplane?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/php-crossplane/issues" target="_blank"><img alt="Issues" src="https://img.shields.io/github/issues/Ne-Lexa/php-crossplane?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/php-crossplane/pulls" target="_blank"><img alt="Pull Requests" src="https://img.shields.io/github/issues-pr/Ne-Lexa/php-crossplane?style=flat-square&amp;labelColor=343b41"/></a></td>
                    </tr>
        <tr>
            <td colspan="5">
                <p>An unofficial PHP port of the NGINX config/JSON converter crossplane </p>
            </td>
        </tr>
            <tr>
            <td rowspan="2">
                <a href="https://github.com/Ne-Lexa/RequestDtoBundle"><b>Ne-Lexa/RequestDtoBundle</b></a><br/><img alt="Platform" src="https://img.shields.io/badge/PHP-symfony--bundle-blueviolet"/><br/><a href="https://packagist.org/packages/nelexa/request-dto-bundle" target="_blank"><img alt="Packagist Version" src="https://img.shields.io/packagist/v/nelexa/request-dto-bundle?style=flat-square&amp;labelColor=343b41"/></a><br/><a href="https://github.com/Ne-Lexa/RequestDtoBundle/actions" target="_blank"><img src="https://github.com/Ne-Lexa/RequestDtoBundle/workflows/build/badge.svg" alt="Build Status"/></a><br/>🕐 created 1 year ago<br/>🕐 updated 9 days ago            </td>
                        <td><a href="https://packagist.org/packages/nelexa/request-dto-bundle" target="_blank"><img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/nelexa/request-dto-bundle?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/RequestDtoBundle" target="_blank"><img alt="Stars" src="https://img.shields.io/github/stars/Ne-Lexa/RequestDtoBundle?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/RequestDtoBundle" target="_blank"><img alt="Forks" src="https://img.shields.io/github/forks/Ne-Lexa/RequestDtoBundle?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/RequestDtoBundle/issues" target="_blank"><img alt="Issues" src="https://img.shields.io/github/issues/Ne-Lexa/RequestDtoBundle?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/RequestDtoBundle/pulls" target="_blank"><img alt="Pull Requests" src="https://img.shields.io/github/issues-pr/Ne-Lexa/RequestDtoBundle?style=flat-square&amp;labelColor=343b41"/></a></td>
                    </tr>
        <tr>
            <td colspan="5">
                <p>The Symfony Bundle that provides support for Request objects for Symfony controller actions.</p>
            </td>
        </tr>
            <tr>
            <td rowspan="2">
                <a href="https://github.com/Ne-Lexa/roach-php-bundle"><b>Ne-Lexa/roach-php-bundle</b></a><br/><img alt="Platform" src="https://img.shields.io/badge/PHP-symfony--bundle-blueviolet"/><br/><a href="https://packagist.org/packages/nelexa/roach-php-bundle" target="_blank"><img alt="Packagist Version" src="https://img.shields.io/packagist/v/nelexa/roach-php-bundle?style=flat-square&amp;labelColor=343b41"/></a><br/><a href="https://github.com/Ne-Lexa/roach-php-bundle/actions" target="_blank"><img src="https://github.com/Ne-Lexa/roach-php-bundle/actions/workflows/build.yml/badge.svg" alt="Build Status"/></a><br/>🕐 created 2 months ago<br/>🕐 updated 29 days ago            </td>
                        <td><a href="https://packagist.org/packages/nelexa/roach-php-bundle" target="_blank"><img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/nelexa/roach-php-bundle?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/roach-php-bundle" target="_blank"><img alt="Stars" src="https://img.shields.io/github/stars/Ne-Lexa/roach-php-bundle?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/roach-php-bundle" target="_blank"><img alt="Forks" src="https://img.shields.io/github/forks/Ne-Lexa/roach-php-bundle?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/roach-php-bundle/issues" target="_blank"><img alt="Issues" src="https://img.shields.io/github/issues/Ne-Lexa/roach-php-bundle?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/roach-php-bundle/pulls" target="_blank"><img alt="Pull Requests" src="https://img.shields.io/github/issues-pr/Ne-Lexa/roach-php-bundle?style=flat-square&amp;labelColor=343b41"/></a></td>
                    </tr>
        <tr>
            <td colspan="5">
                <p>Symfony bundle for roach-php/core</p>
            </td>
        </tr>
            <tr>
            <td rowspan="2">
                <a href="https://github.com/Ne-Lexa/http-client-simple-cache"><b>Ne-Lexa/http-client-simple-cache</b></a><br/><img alt="Platform" src="https://img.shields.io/badge/PHP-library-blueviolet"/><br/><a href="https://packagist.org/packages/nelexa/http-client-simple-cache" target="_blank"><img alt="Packagist Version" src="https://img.shields.io/packagist/v/nelexa/http-client-simple-cache?style=flat-square&amp;labelColor=343b41"/></a><br/><a href="https://github.com/Ne-Lexa/http-client-simple-cache/actions" target="_blank"><img src="https://github.com/Ne-Lexa/http-client-simple-cache/workflows/build/badge.svg" alt="Build Status"/></a><br/>🕐 created 2 years ago<br/>🕐 updated 1 year ago            </td>
                        <td><a href="https://packagist.org/packages/nelexa/http-client-simple-cache" target="_blank"><img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/nelexa/http-client-simple-cache?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/http-client-simple-cache" target="_blank"><img alt="Stars" src="https://img.shields.io/github/stars/Ne-Lexa/http-client-simple-cache?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/http-client-simple-cache" target="_blank"><img alt="Forks" src="https://img.shields.io/github/forks/Ne-Lexa/http-client-simple-cache?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/http-client-simple-cache/issues" target="_blank"><img alt="Issues" src="https://img.shields.io/github/issues/Ne-Lexa/http-client-simple-cache?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/http-client-simple-cache/pulls" target="_blank"><img alt="Pull Requests" src="https://img.shields.io/github/issues-pr/Ne-Lexa/http-client-simple-cache?style=flat-square&amp;labelColor=343b41"/></a></td>
                    </tr>
        <tr>
            <td colspan="5">
                <p>Guzzle-based HTTP Client with the ability to customize caching of the processed HTTP request results (not based on HTTP headers).</p>
            </td>
        </tr>
            <tr>
            <td rowspan="2">
                <a href="https://github.com/Ne-Lexa/enum"><b>Ne-Lexa/enum</b></a><br/><img alt="Platform" src="https://img.shields.io/badge/PHP-library-blueviolet"/><br/><a href="https://packagist.org/packages/nelexa/enum" target="_blank"><img alt="Packagist Version" src="https://img.shields.io/packagist/v/nelexa/enum?style=flat-square&amp;labelColor=343b41"/></a><br/><a href="https://github.com/Ne-Lexa/enum/actions" target="_blank"><img src="https://github.com/Ne-Lexa/enum/workflows/build/badge.svg" alt="Build Status"/></a><br/>🕐 created 3 years ago<br/>🕐 updated 1 year ago            </td>
                        <td><a href="https://packagist.org/packages/nelexa/enum" target="_blank"><img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/nelexa/enum?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/enum" target="_blank"><img alt="Stars" src="https://img.shields.io/github/stars/Ne-Lexa/enum?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/enum" target="_blank"><img alt="Forks" src="https://img.shields.io/github/forks/Ne-Lexa/enum?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/enum/issues" target="_blank"><img alt="Issues" src="https://img.shields.io/github/issues/Ne-Lexa/enum?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/enum/pulls" target="_blank"><img alt="Pull Requests" src="https://img.shields.io/github/issues-pr/Ne-Lexa/enum?style=flat-square&amp;labelColor=343b41"/></a></td>
                    </tr>
        <tr>
            <td colspan="5">
                <p>PHP Enum implementation</p>
            </td>
        </tr>
            <tr>
            <td rowspan="2">
                <a href="https://github.com/Ne-Lexa/guzzle-doh-middleware"><b>Ne-Lexa/guzzle-doh-middleware</b></a><br/><img alt="Platform" src="https://img.shields.io/badge/PHP-library-blueviolet"/><br/><a href="https://packagist.org/packages/nelexa/guzzle-doh-middleware" target="_blank"><img alt="Packagist Version" src="https://img.shields.io/packagist/v/nelexa/guzzle-doh-middleware?style=flat-square&amp;labelColor=343b41"/></a><br/><a href="https://github.com/Ne-Lexa/guzzle-doh-middleware/actions" target="_blank"><img src="https://github.com/Ne-Lexa/guzzle-doh-middleware/actions/workflows/tests.yml/badge.svg" alt="Build Status"/></a><br/>🕐 created 2 months ago<br/>🕐 updated 2 months ago            </td>
                        <td><a href="https://packagist.org/packages/nelexa/guzzle-doh-middleware" target="_blank"><img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/nelexa/guzzle-doh-middleware?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/guzzle-doh-middleware" target="_blank"><img alt="Stars" src="https://img.shields.io/github/stars/Ne-Lexa/guzzle-doh-middleware?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/guzzle-doh-middleware" target="_blank"><img alt="Forks" src="https://img.shields.io/github/forks/Ne-Lexa/guzzle-doh-middleware?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/guzzle-doh-middleware/issues" target="_blank"><img alt="Issues" src="https://img.shields.io/github/issues/Ne-Lexa/guzzle-doh-middleware?style=flat-square&amp;labelColor=343b41"/></a></td>
                        <td><a href="https://github.com/Ne-Lexa/guzzle-doh-middleware/pulls" target="_blank"><img alt="Pull Requests" src="https://img.shields.io/github/issues-pr/Ne-Lexa/guzzle-doh-middleware?style=flat-square&amp;labelColor=343b41"/></a></td>
                    </tr>
        <tr>
            <td colspan="5">
                <p>A Dns over Https (DoH) middleware for Guzzle &gt;= 6.0</p>
            </td>
        </tr>
        </tbody>
</table>
