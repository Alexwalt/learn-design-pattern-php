<?php
namespace App;


class YamlSystemConfigParser implements IRuleConfigParser
{
    public function parser($configText)
    {
        return "system config yaml";
    }
}