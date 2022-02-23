<?php
/**
 * @var array $user
 * @var int $age
 * @var array $tableHeaders
 * @var array<array<string>> $tableRows
 */
?>
<h1 align="center">Привет! I'm <?= $user['name']; ?> & I ❤ code.</h1>

<h2 align="center"><?= $user['bio']; ?></h2>

```php
<?= "<?php\n"; ?>

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
        $this->id = <?= $user['id']; ?>;
        $this->name = '<?= addslashes($user['name']); ?>';
        $this->username = '<?= addslashes($user['login']); ?>';
        $this->age = <?= $age; ?>;
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
            <?php foreach ($tableHeaders as $header): ?>
            <th><?= $header; ?></th>
            <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tableRows as $rows): ?>
        <tr>
            <td rowspan="2">
                <?= $rows['title']; ?>
            </td>
            <?php foreach ($rows['cols'] as $col): ?>
            <td><?= $col; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <td colspan="<?= count($rows['cols']); ?>">
                <p><?= htmlspecialchars($rows['description']);?></p>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
