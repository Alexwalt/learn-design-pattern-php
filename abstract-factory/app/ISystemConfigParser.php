<?php
namespace App;

interface ISystemConfigParser
{
	public function parser($configText);
}