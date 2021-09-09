<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-07
 * Time: 14:04
 */

namespace App;


class SearchRows
{
	public $id;
	public $name;
	public $keywords;
	public $updated_at;
	public $count;

	public function __construct($id,$keywords=null, $count=0, $updated_at=null)
	{
		$this->id = $id;
		$this->keywords= $keywords;
		$this->count = $count;

		if(!$updated_at){
			$updated_at = time();
		}
		$this->updated_at = $updated_at;
	}

	public function getLastUpdateTime()
	{
		return $this->updated_at;
	}
	public function setLastUpdateTime($updated_at)
	{
		$this->updated_at = $updated_at;
	}


	public function getKeyword()
	{
		return $this->keywords;
	}

	public function setCount($count)
	{
		$this->count = $count;
	}

	public function getCount()
	{
		return $this->count;
	}
	public function __clone()
	{
		// TODO: Implement __clone() method.
	}
}