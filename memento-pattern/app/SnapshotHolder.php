<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-06
 * Time: 10:15
 */

namespace App;


class SnapshotHolder
{
	protected $snapshot = [];
	public function popSnapshot()
	{
		if(count($this->snapshot)>0)
		{
			return  array_pop($this->snapshot);
		}
		return new InputText();

	}

	public function pushSnapshot(Snapshot $snapshot)
	{
		$this->snapshot[] = $snapshot;
	}
}