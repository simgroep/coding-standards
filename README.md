mainlycode/coding-standards
===========================

Coding standard configuration for MainlyCode PHP projects using `fabpot/php-cs-fixer`

## Installation

```
$ composer require mainlycode/coding-standards
```

## Examples

Only check for coding standard violations:

```
$ ./vendor/bin/php-cs-fixer fix --dry-run --diff --config-file=vendor/mainlycode/coding-standard/.php_cs
```

Fix coding standard violations:

```
$ ./vendor/bin/php-cs-fixer fix --diff --config-file=vendor/mainlycode/coding-standard/.php_cs
```
