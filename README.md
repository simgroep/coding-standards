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
$ ./vendor/bin/php-cs-fixer fix --dry-run --diff
```

Fix coding standard violations:

```
$ ./vendor/bin/php-cs-fixer fix --diff
```
