<?php
namespace App;

/**
 * 简单工厂的第二种实现方法
 */
class RuleConfigParserFactory
{
    private static $cachedFactory;


    private static function init()
    {
        self::$cachedFactory=[
            "json" => new JsonConfigParserFactory(),
            "xml" => new XmlConfigParserFactory(),
            "yaml" => new YamlConfigParserFactory(),
    
        ];
    }
   
    public static function getParserFactory($configFormat)
    {
        self::init();

        if(!in_array($configFormat,["json","xml","yaml"]))
        {
            //错误    
        }
        return self::$cachedFactory[$configFormat];
    }
}