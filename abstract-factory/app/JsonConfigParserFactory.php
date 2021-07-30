<?php
namespace App;

class JsonConfigParserFactory implements IConfigParserFactory
{
    public function createRuleParser(): IRuleConfigParser {
        return new JsonRuleConfigParser();
    }

    public function createSystemParser():ISystemConfigParser
    {
        return new JsonSystemConfigParser();
    }

}