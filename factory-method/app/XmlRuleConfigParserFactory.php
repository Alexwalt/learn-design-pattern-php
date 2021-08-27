<?php
namespace App;

class XmlRuleConfigParserFactory implements IRuleConfigParserFactory
{

	public function createParser()
	{
		return new XmlRuleConfigParser();
	}
}