# outer/edge Coding Standards

This repository contains the coding standards used by outer/edge with rules for:

 - PHPCS

## Install

`composer require --dev outeredge/coding-standards`

Then you can add the outer/edge coding standard to your **phpcs.xml**, i.e. for Magento 2:

```xml
<?xml version="1.0"?>
<ruleset>
    ...
    <rule ref="vendor/outeredge/dev-dependencies/phpcs-magento.xml" />
    <file>app/code/...</file>
    <file>app/design/frontend/...</file>
    ...
</ruleset>
</xml>
```

### Running PHPCS tests

`$ phpcs`

### Running PHPCS code fixer

`$ phpcbf`
