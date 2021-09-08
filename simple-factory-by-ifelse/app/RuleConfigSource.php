<?php
namespace App;



class RuleConfigSource
{
    protected  $parser;
    protected $ruleConfig;

    public function  load( $ruleConfigFilePath)
    {
        $ruleConfigFileExtension = $this->getFileExtension($ruleConfigFilePath);
        $this->parser = RuleConfigParserFactory::createParse($ruleConfigFileExtension);

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