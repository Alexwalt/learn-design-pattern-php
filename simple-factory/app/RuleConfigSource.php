<?php
namespace App;



class RuleConfigSource
{
    protected IRuleConfigParser $parser;
    protected $ruleConfig;

    public function  load( $ruleConfigFilePath)
    {
        $ruleConfigFileExtension = $this->getFileExtension($ruleConfigFilePath);
      
        if( strcasecmp($ruleConfigFileExtension,"json" )===0){
            $this->parser = new JsonRuleConfigParser();
        } else if ( strcasecmp($ruleConfigFileExtension,"xml" )===0){
            $this->parser = new XmlRuleConfigParser();
        } else if( strcasecmp($ruleConfigFileExtension,"yaml" )===0){
            $this->parser = new YamlRuleConfigParser();
        } else {
            //default
        }
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
}