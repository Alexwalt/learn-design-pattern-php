<?php
namespace App;



class RuleConfigSource
{
    protected  $parser;
    protected $ruleConfig;

    public function  load( $ruleConfigFilePath)
    {
        $ruleConfigFileExtension = $this->getFileExtension($ruleConfigFilePath);
      
        $this->parser = $this->createParse($ruleConfigFileExtension);
        
        $configText = "";
        $this->ruleConfig =  $this->parser->parser($configText);
        return $this->ruleConfig;
    }
    
    /**
     * 解析文件扩展名
     */
    private function getFileExtension()
    {
        //for example
        return "json";
    }

    /**
     * 剥离parser函数抽象成parser
     */
    private function createParse($configFormat)
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