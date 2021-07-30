<?php
/**
 * Created by PhpStorm.
 * User: 小水
 * Date: 2021-07-28
 * Time: 11:50
 */

require __DIR__.'/vendor/autoload.php';

use App\NastyBoss;

$boss = new NastyBoss();
$boss->addEmployees("harry");
$boss->addEmployees("bob");
$boss->addEmployees("marry");
$boss->projectFails();