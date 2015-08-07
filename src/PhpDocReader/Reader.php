<?php

namespace PhpDocReader;

/**
 * Class Reader
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package PhpDocReader
 */
class Reader
{
    /**
     * Obtém a configuração de uma classe ou propriedade.
     * @param $class
     * @param null $property
     * @return array
     */
    public static function getConfig($class, $property = null)
    {
        $doc = Reflector::getDoc($class, $property);
        $cfg = ConfigurationBuilder::build($doc);
        return $cfg;
    }
}