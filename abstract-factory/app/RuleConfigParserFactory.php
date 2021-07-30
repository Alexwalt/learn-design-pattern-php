<?php
namespace App;

/**
 * 简单工厂的第二种实现方法
 */
class RuleConfigParserFactory
{
    private static $cachedParsers;


    private static function init()
    {
        self::$cachedParsers=[
            "json" => new JsonRuleConfigParser(),
            "xml" => new XmlRuleConfigParser(),
            "yaml" => new YamlRuleConfigParser(),
    
        ];
    }
   
    public static function createParse($configFormat)
    {
        self::init();

        if(!in_array($configFormat,["json","xml","yaml"]))
        {
            //错误    
        }
        return self::$cachedParsers[$configFormat];
    }
}