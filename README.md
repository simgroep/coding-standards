simgroep/coding-standards
=========================

Coding standard configuration for SIMGroep PHP projects using `friendsofphp/php-cs-fixer`

## Installation

```
$ composer require simgroep/coding-standards
```

## Configuration

To customize the default configuration in your project you can add a `.php_cs` to your
project and include the default configuration like this:

```php
<?php

$config = require 'vendor/simgroep/coding-standards/.php_cs.dist';

$config->setFinder(
    \PhpCsFixer\Finder::create()
        ->in([
            getcwd() . '/src',
            getcwd() . '/test',
        ])
    )
;

return $config;
```

### Symfony example

When applying the coding standards to a standard Symfony project you can customize
the configuration for a blacklisting approach like this:

```php
<?php

$config = require 'vendor/simgroep/coding-standards/.php_cs.dist';

$config->setFinder(
    \PhpCsFixer\Finder::create()
        ->in(getcwd())
        ->exclude('app')
        ->exclude('bin')
        ->exclude('var/cache')
        ->exclude('vendor')
    )
;

return $config;
```

## Usage

Only check for coding standard violations:

```
$ ./vendor/bin/php-cs-fixer fix --dry-run --diff --config=vendor/simgroep/coding-standard/.php_cs.dist --stop-on-violation --allow-risky=yes
```

Fix coding standard violations:

```
$ ./vendor/bin/php-cs-fixer fix --diff --config=vendor/simgroep/coding-standard/.php_cs.dist --stop-on-violation --allow-risky=yes
```

## PhpStorm integration

Start by installing this library global:

```
$ composer global require simgroep/coding-standards
```

Open PhpStorm and navigate to "Settings" -> "Tools" -> "File Watchers" add one (+).
Disable "Immediate file synchronization".

Program: `/Users/<username>/.composer/vendor/bin/php-cs-fixer`

Arguments: `fix $FileDir$/$FileName$ --config=/Users/<username>/.composer/vendor/simgroep/coding-standards/.php_cs.dist`

Working dir: `$ProjectFileDir$`
