<?php
/**
 * User: 小水
 * Date: 2021-07-28
 */
require __DIR__.'/vendor/autoload.php';

$resourceBuilder = new \App\ResourceBuilder();
try{
	$poolConfig = $resourceBuilder->setName("resource")
		->setMaxIdle(10)
		->setMinIdle(1)
		->setMaxTotal(12)
		->build();

	var_dump($poolConfig);
} catch (Exception $exception){
	echo $exception->getMessage() . PHP_EOL;
}
