<?php
namespace App;

/**
 * 简单工厂的第一种实现方法
 */
class RuleConfigParserFactory
{
    /**
     * 剥离parser函数抽象成工厂类
     */
    public static function createParse($configFormat)
    {
        $parser = null;
        if( strcasecmp($configFormat,"json" )===0){
            $parser = new JsonRuleConfigParser();
        } else if ( strcasecmp($configFormat,"xml" )===0){
            $parser = new XmlRuleConfigParser();
        } else if( strcasecmp($configFormat,"yaml" )===0){
            $parser = new YamlRuleConfigParser();
        } else {
            //default
        }
        return $parser;
    }
}