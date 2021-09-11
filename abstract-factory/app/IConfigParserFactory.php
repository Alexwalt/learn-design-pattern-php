<?php

namespace App;

interface IConfigParserFactory
{
    public function createRuleParser() ;
    public function createSystemParser();

}