# outer/edge Coding Standards

This repository contains the coding standards used by outer/edge with rules for:

 - PHPCS
 - JSCS
 
## Running PHPCS tests

First be sure to have PHPCS available

```bash
$ composer global require "squizlabs/php_codesniffer=*"
```

Then add this repository to your **composer.json**

```json
{
    "require-dev": {
        "outeredge/coding-standards": "~1.0.0"
    }
}
```

Then you can add the outer/edge coding standard to your **phpcs.xml**

```xml
<?xml version="1.0"?>
    ...
    <config name="installed_paths" value="vendor/outeredge/coding-standards"/>
    <rule ref="OuterEdge"/>
    ...
</xml>
```

## Running JSCS tests

Add this repository to your **package.json** file

```json
{
  "devDependencies": {
    "jscs": "~3.0.6",
    "jscs-preset-outeredge": "~1.0.0"
  }
}
```

Then use set your prefix to `outeredge` in your own **.jscsrc** file.

```json
{
  "preset": "outeredge",
  ...
}
```
