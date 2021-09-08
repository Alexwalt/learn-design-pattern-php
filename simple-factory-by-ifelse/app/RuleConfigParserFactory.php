<?php
namespace App;

/**
 * 简单工厂的第一种实现方法
 */
class RuleConfigParserFactory
{
   
    public static function createParse($configFormat)
    {
	    if( strcasecmp($configFormat,"json" )===0){
		    return new JsonRuleConfigParser();
	    } else if ( strcasecmp($configFormat,"xml" )===0){
		    return new XmlRuleConfigParser();
	    } else if( strcasecmp($configFormat,"yaml" )===0){
		    return new YamlRuleConfigParser();
	    } else {
		    //default
		    return null;
	    }
    }
}