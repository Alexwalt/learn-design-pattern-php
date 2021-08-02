<?php
/**
 * User: 小水
 * Date: 2021-07-28
 */
require __DIR__.'/vendor/autoload.php';

$builderResource = new \App\Builder();
try{
	$builderResource = $builderResource->setName("resource")
		->setMaxIdle(10)
		->setMinIdle(1)
		->setMaxTotal(12)
		->build();

	$poolConfig = new \App\ResourcePoolConfig($builderResource);
	var_dump($poolConfig);
} catch (Exception $exception){
	echo $exception->getMessage() . PHP_EOL;
}
