<?php
namespace App;


class JsonRuleConfigParser implements IRuleConfigParser
{
    public function parser($configText)
    {
        return "json";
    }
}