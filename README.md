PhpDealModule
-------------

The PhpDealModule adds support for [PhpDeal](https://github.com/php-deal/framework) for Zend Framework 2 applications.

This will also make use of the [goaop/goaop-zf2-module](https://github.com/goaop/goaop-zf2-module).
So you make use of a more simpler installation using modules.

Installation
------------

PhpDealModule can be easily installend using composer. Just 
download the bundle with dependencies by running the command

```bash
$ composer require php-deal/php-deal-zf2-module
```

Add the `PhpDeal\ZF2\PhpDealModule` to your list of modules in the config/application.config.php `modules` array:
```php
// config/application.config.php
    
    // This should be an array of module namespaces used in the application.
    'modules' => array(
        'Go\ZF2\GoAopModule',
        'PhpDeal\ZF2\PhpDealModule',
        'Application',
    ),
```

Make sure that this goes **behind** `Go\ZF2\GoAopModule`. This is required for the AOP engine to work correctly.

Configuration
-------------

Next step you need to adjust the `includePaths` from `Go\ZF2\GoAopModule` to work with the Contracts.

```php
// config/module.config.php

    $moduleConfig = [
        ...
        
        'includePaths' => [
            $basicDirectory . '/module'
        ]
        
        ...
    ];
```

If you have your whole module path added here, you don't need to add another sub path.

License
-------

This module is under the MIT license. See the complete LICENSE in the root directory
