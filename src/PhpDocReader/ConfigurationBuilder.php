<?php

namespace PhpDocReader;

/**
 * Class ConfigurationBuilder
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package PhpDocReader
 */
class ConfigurationBuilder
{
    /**
     * Cria um arquivo de configuração a
     * partir de um comentário.
     * @param $comment
     * @return array
     */
    public static function build($comment)
    {
        $json = self::getJson($comment);
        $config = self::compile($json);
        return $config;
    }

    /**
     * @param $comment
     * @return array
     */
    private static function getJson($comment)
    {
        preg_match_all("/@configure (.*?)\r\n/", $comment, $matches);
        return $matches[1];
    }

    /**
     * Junta todas configurações em uma array
     * @param array $config
     * @return array
     */
    private static function compile(array $config)
    {
        $fullConfig = [];

        foreach ($config as $json) {
            $jsonConfig = (array)json_decode($json);
            $fullConfig = array_merge($fullConfig, $jsonConfig);
        }

        return $fullConfig;
    }
}