<?php
namespace App;


class YamlRuleConfigParserFactory implements IRuleConfigParserFactory
{


	public function createParser()
	{
		return new YamlRuleConfigParser();
	}
}