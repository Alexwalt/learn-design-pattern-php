<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-06
 * Time: 12:05
 */

namespace App;


class Snapshot
{
	protected $text;

	public function __construct($text = '')
	{
		$this->text = $text;
	}
	public function getText()
	{
		return $this->text;
	}
}