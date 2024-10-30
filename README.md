# LeetCode

## VS Code & PHP
1. Install the [latest stable version of PHP](https://www.php.net/downloads) from the official PHP website.
2. Install the extension [PHP Intelliphense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client).
3. Disable the built-in PHP Language Features extension by typing `@builtin php` in the extensions search box to locate the extension.
4. Install [Composer](https://getcomposer.org/download/).

## Dev Initialization
```
composer init
composer require --dev phpunit/phpunit
```

composer.json
```json
{
    "name": "maria/leetcode",
    "description": "A repository for PHP solutions to LeetCode problems",
    "require": {
        "php": "^8.0"
    },
    "require-dev": {
        "phpunit/phpunit": "^11.4"
    },
    "autoload": {
        "psr-4": {
            "LeetCode\\Problems\\": "Problems/"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "LeetCode\\Tests\\": "Tests/"
        }
    },
    "authors": [
        {
            "name": "Maria-Papa",
            "email": "1maria.papa@gmail.com"
        }
    ],
    "license": "MIT",
    "scripts": {
        "test": "phpunit",
        "test:debug": "phpunit --debug",
        "test:coverage": "phpunit --coverage-html coverage"
    }
}
```

phpunit.xml
```xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit bootstrap="vendor/autoload.php" colors="true">
    <testsuites>
        <testsuite name="LeetCode Solutions Test Suite">
            <directory>./tests</directory>
        </testsuite>
    </testsuites>
</phpunit>
```

```
composer install
```

## Run Tests
```
composer test
```
