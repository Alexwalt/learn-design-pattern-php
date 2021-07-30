<?php

namespace App;

interface IConfigParserFactory
{
    public function createRuleParser(): IRuleConfigParser ;
    public function createSystemParser():ISystemConfigParser;

}