<?php
namespace App;


class JsonRuleConfigParserFactory implements IRuleConfigParserFactory
{
	public function createParser()
	{
		return new JsonRuleConfigParser();
	}
}