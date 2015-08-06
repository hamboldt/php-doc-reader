# php-doc-reader
Reads configuration assets in objects and elements.

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
phpDocReader::getConfig('MyConfigurableClass');

// array("config_name" => "config_value")
phpDocReader::getConfig('MyConfigurableClass::$property');
```
