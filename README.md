simgroep/coding-standards
===========================

Coding standard configuration for SIMGroep PHP projects using `fabpot/php-cs-fixer`

## Installation

```
$ composer require simgroep/coding-standards
```

## Examples

Only check for coding standard violations:

```
$ ./vendor/bin/php-cs-fixer fix --dry-run --diff --config-file=vendor/simgroep/coding-standard/.php_cs
```

Fix coding standard violations:

```
$ ./vendor/bin/php-cs-fixer fix --diff --config-file=vendor/simgroep/coding-standard/.php_cs
```

## PhpStorm integration

Start by installing this library global:

```
$ composer global require simgroep/coding-standards
```

Open PhpStorm and navigate to "settings" -> "tools" -> add one (+).
Disable "Immediate fily synchronization".

Program: `/Users/<username>/.composer/vendor/bin/php-cs-fixer`

Arguments: `fix $FileDir$/$FileName$ --config-file=/Users/<username>/.composer/vendor/simgroep/coding-standard/.php_cs`

Working dir: `$ProjectFileDir$`

## Requirements

If you run php7 you need to install the php7.0-xml package.
Else align_double_arrow and align_equals won't work

$ sudo apt-get install php7.0-xml
