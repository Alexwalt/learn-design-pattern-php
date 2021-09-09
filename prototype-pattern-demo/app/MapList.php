<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-07
 * Time: 14:57
 */

namespace App;


class MapList
{
	public $values;

	public function __construct()
	{
		$this->values[] =  new SearchRows(1,'water',2130,1630998922);
		$this->values[] =  new SearchRows(2,'moon',1008,1630998922);
		$this->values[] =  new SearchRows(3,'alexwalt',4321,1630998922);
		$this->values[] =  new SearchRows(4,'little',642,1630998922);
		$this->values[] =  new SearchRows(5,'water',1232,1630998922);
	}
	public function getValues()
	{
		return $this->values;
	}
	public function __clone()
	{
	}
}