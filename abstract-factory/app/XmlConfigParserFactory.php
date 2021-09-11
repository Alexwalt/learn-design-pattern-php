<?php
namespace App;

class XmlConfigParserFactory implements IConfigParserFactory
{
    public function createRuleParser(){
        return new XmlRuleConfigParser();
    }

    public function createSystemParser()
    {
        return new XmlSystemConfigParser();
    }

}