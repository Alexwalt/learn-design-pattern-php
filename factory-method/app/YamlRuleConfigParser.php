<?php
namespace App;


class YamlRuleConfigParser implements IRuleConfigParser
{
    public function parser($configText)
    {
        return "yaml";
    }
}