<?php
namespace App;

class XmlRuleConfigParser implements IRuleConfigParser
{
    public function parser($configText)
    {
        return "xml";
    }
}