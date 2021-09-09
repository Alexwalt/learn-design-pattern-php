<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-09
 * Time: 14:53
 */

namespace App;


class RuleConfigParserFactoryMap
{
	private static $cachedFactories;


	private static function init()
	{
		self::$cachedFactories = [
			"json" => new JsonRuleConfigParserFactory(),
			"xml" => new XmlRuleConfigParserFactory(),
			"yaml" => new YamlRuleConfigParserFactory(),

		];
	}

	public static function getParserFactory($type)
	{
		self::init();
		if ($type == null ) {
			return null;
		}
		$parserFactory = self::$cachedFactories[$type];
		return $parserFactory;
	}
}