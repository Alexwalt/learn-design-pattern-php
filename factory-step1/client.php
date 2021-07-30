<?php
/**
 * Created by PhpStorm.
 * User: 小水
 * Date: 2021-07-28
 * Time: 11:50
 */

use App\CommsManager;

require __DIR__.'/vendor/autoload.php';

$man = new CommsManager(CommsManager::BLOGGS);
print ( get_class($man->getApptEncoder())).PHP_EOL;
$man = new CommsManager(CommsManager::MEGA);
print ( get_class($man->getApptEncoder())).PHP_EOL;