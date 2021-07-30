<?php
namespace App;


class JsonSystemConfigParser implements ISystemConfigParser
{
    public function parser($configText)
    {
        return "json";
    }
}