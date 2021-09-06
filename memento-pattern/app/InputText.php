<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-06
 * Time: 10:11
 */

namespace App;


class InputText
{
	protected $text ='';

	public function __construct($text = '')
	{
		$this->text = $text;
	}

	public function getText()
	{
		return $this->text;
	}
	public function append($input)
	{
		$this->text .= $input;
	}

	public function createSnapshot()
	{
		return new Snapshot($this->text);

	}

	public function restoreSnapshot(Snapshot $snapshot)
	{
		$this->text = $snapshot->getText();
	}

}