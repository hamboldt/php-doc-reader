<?php

/**
 * Class Administrator
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @configure {"table":"cad_admin"}
 * @configure {"primary_key":"idadministrator"}
 */
class Administrator
{
    /**
     * ID do administrador
     * @var int
     * @configure {"alias":"idadministrator"}
     */
    public $idadministrator;
}

/**
 * Class ConfigurationReadTest
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 */
class ConfigurationReadTest extends \PHPUnit_Framework_TestCase
{
    public function testDoc()
    {
        $doc1 = PhpDocReader\Reader::getConfig('Administrator');
        $this->assertArrayHasKey('table', $doc1);
        $this->assertArrayHasKey('primary_key', $doc1);

        $doc2 = PhpDocReader\Reader::getConfig('Administrator', 'idadministrator');
        $this->assertArrayHasKey('alias', $doc2);
    }
}