<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-07
 * Time: 13:56
 */

namespace App;


class Demo
{

	private $currentKeywords = [];
	private $lastUpdateTime = -1;
	private $currentKeywordsInstance = null;

	public function __construct()
	{
		$inst = new MapList();
		$this->currentKeywordsInstance = $inst;
		$this->currentKeywords = $inst->getValues();
	}
	public function out()
	{
		echo json_encode(array_column($this->currentKeywords,'id')) .PHP_EOL  ;
//		$newKeyworks = clone $this->currentKeywords;
	}

	public function refresh()
	{
		// 原型模式就这么简单，拷贝已有对象的数据，更新少量差值
		//clone
		$newKeywordsInst = clone $this->currentKeywordsInstance;
		$newKeywords = $newKeywordsInst->getValues();

		// 从数据库中取出更新时间>lastUpdateTime的数据，放入到newKeywords中
		$toBeUpdatedSearchWords = $this->getSearchWords($this->lastUpdateTime);
		$maxNewUpdatedTime = $this->lastUpdateTime;

		foreach ($toBeUpdatedSearchWords as $searchWord) {
			if ($searchWord->getLastUpdateTime() > $maxNewUpdatedTime) {
				$maxNewUpdatedTime = $searchWord->getLastUpdateTime();
			}
			if (in_array( $searchWord->getKeyword(),array_column($newKeywords,'keywords') )){
				$searchIndex = array_search($searchWord->getKeyword(),array_column($newKeywords,'keywords'));
				$oldSearchWord = $newKeywords[$searchIndex];
				$oldSearchWord->setCount($searchWord->getCount());
				$oldSearchWord->setLastUpdateTime($searchWord->getLastUpdateTime());

			} else {
				$searchIndex = array_search($searchWord->getKeyword(),array_column($newKeywords,'keywords'));
				$newKeywords[$searchIndex] = $searchWord;
			}
		}
//
		$lastUpdateTime = $maxNewUpdatedTime;
		$currentKeywords = $newKeywords;
		echo "now last update time = " . $lastUpdateTime.PHP_EOL;
		var_dump($currentKeywords) ;

	}

	private function getSearchWords($lastUpdateTime)
	{
		// TODO: 从数据库中取出更新时间>lastUpdateTime的数据
		// select * from tabel where updated_at > $lastUpdateTime;
		$goods = [
			new Goods(3,'alexwalt',5321,1630998932),
		    new Goods(4,'little',742,1630998932)
		];
		return $goods;
	}
}