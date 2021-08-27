<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-08-27
 * Time: 15:01
 */

namespace App;


interface IRuleConfigParserFactory
{
	public function createParser();
}