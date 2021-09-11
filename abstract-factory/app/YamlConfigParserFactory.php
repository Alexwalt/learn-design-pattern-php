<?php
namespace App;

class YamlConfigParserFactory implements IConfigParserFactory
{
    public function createRuleParser(){
        return new YamlRuleConfigParser();
    }

    public function createSystemParser()
    {
        return new YamlSystemConfigParser();
    }

}