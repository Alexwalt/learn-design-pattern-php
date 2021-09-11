<?php
namespace App;

class JsonConfigParserFactory implements IConfigParserFactory
{
    public function createRuleParser(){
        return new JsonRuleConfigParser();
    }

    public function createSystemParser()
    {
        return new JsonSystemConfigParser();
    }

}