<?php
namespace App;

interface IRuleConfigParser
{
    public function parser($configText);
}