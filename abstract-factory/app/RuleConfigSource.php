<?php
namespace App;



class RuleConfigSource
{
	protected $parserFactory;
	protected $ruleParser;
	protected $systemParser;
	protected $ruleConfig;
	protected $systemConfig;

    public function  load( $ruleConfigFilePath)
    {
        $ruleConfigFileExtension = $this->getFileExtension($ruleConfigFilePath);
      
        $this->parserFactory =  RuleConfigParserFactory::getParserFactory($ruleConfigFileExtension);
	    $this->ruleParser =$this->parserFactory->createRuleParser();
	    $this->systemParser=$this->parserFactory->createSystemParser();
        $configText = "";
        $this->ruleConfig =  $this->ruleParser->parser($configText);
	    $this->systemConfig =  $this->systemParser->parser($configText);
        return [
        	'rule' =>$this->ruleConfig,
	        'system' =>$this->systemConfig
        ];
    }

	/**
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