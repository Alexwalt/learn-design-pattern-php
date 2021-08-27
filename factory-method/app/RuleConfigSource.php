<?php
namespace App;



class RuleConfigSource
{
    protected $ruleConfig;

    public function  load( $ruleConfigFilePath)
    {
        $ruleConfigFileExtension = $this->getFileExtension($ruleConfigFilePath);


	    $parserFactory = null;
	    if( strcasecmp($ruleConfigFileExtension,"json" )===0){
		    $parserFactory = new JsonRuleConfigParserFactory();
	    } else if ( strcasecmp($ruleConfigFileExtension,"xml" )===0){
		    $parserFactory = new XmlRuleConfigParserFactory();
	    } else if( strcasecmp($ruleConfigFileExtension,"yaml" )===0){
		    $parserFactory = new YamlRuleConfigParserFactory();
	    } else {
		    //default
	    }
	    $parser = $parserFactory->createParser();
        
        $configText = "";
        $this->ruleConfig =  $parser->parser($configText);
        return $this->ruleConfig;
    }

	/**
	 * 解析文件扩展名
	 * @param $ruleConfigFilePath
	 * @return mixed
	 */
    private function getFileExtension($ruleConfigFilePath)
    {
        //for example
        $pathSplit = explode('.',$ruleConfigFilePath);

        return $pathSplit[count($pathSplit)-1] ;
    }




}