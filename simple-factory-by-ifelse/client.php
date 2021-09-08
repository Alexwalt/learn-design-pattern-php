<?php
/**
 * Created by PhpStorm.
 * User: 小水
 * Date: 2021-07-28
 * Time: 11:50
 */

use App\RuleConfigSource;

require __DIR__.'/vendor/autoload.php';

$obj = new RuleConfigSource();

$config = $obj->load('a.json');
print($config . PHP_EOL);