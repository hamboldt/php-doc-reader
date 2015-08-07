# php-doc-reader

[![Build Status](https://scrutinizer-ci.com/g/hamboldt/php-doc-reader/badges/build.png?b=master)](https://scrutinizer-ci.com/g/hamboldt/php-doc-reader/build-status/master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/hamboldt/php-doc-reader/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/hamboldt/php-doc-reader/?branch=master) [![License](https://poser.pugx.org/hamboldt/php-doc-reader/license)](https://packagist.org/packages/hamboldt/php-doc-reader) [![Total Downloads](https://poser.pugx.org/hamboldt/php-doc-reader/downloads)](https://packagist.org/packages/hamboldt/php-doc-reader)

Reads configuration assets in objects and elements, just like in the example below:

`composer require hamboldt/php-doc-reader`

### Example
```php
<?php

/**
 * Look this amazing configurable class.
 * @configure {"config_name":"config_value"}
 */
class MyConfigurableClass
{
   /**
    * Look this amazing configurable property!
    * @configure {"config_name":"config_value"}
    */
   public $property;
}

// array("config_name" => "config_value")
PhpDocReader\Reader::getConfig('MyConfigurableClass');

// array("config_name" => "config_value")
PhpDocReader\Reader::getConfig('MyConfigurableClass', 'property');
```
