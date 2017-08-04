# outer/edge Coding Standards

This repository contains the coding standards used by outer/edge with rules for:

 - PHPCS
 - JSCS
 
## Running PHPCS tests

First be sure to have PHPCS available

```bash
$ composer global require "squizlabs/php_codesniffer=*"
```

Then add this repository to your composer.json

```json
{
    "require": {
        "outeredge/coding-standards": "~1.0.0",
        "squizlabs/php_codesniffer": "3.*"
    }
}
```

Then you can add the outer/edge coding standard to your phpcs.xml

```xml
...
    <config name="installed_paths" value="vendor/outeredge/coding-standards"/>
    <rule ref="OuterEdge"/>
...
```
