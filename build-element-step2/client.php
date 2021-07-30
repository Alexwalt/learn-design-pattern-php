<?php
/**
 * Created by PhpStorm.
 * User: 小水
 * Date: 2021-07-28
 * Time: 11:50
 */

require __DIR__.'/vendor/autoload.php';

use App\Minion;
use App\NastyBoss;

$boss = new NastyBoss();
$boss->addEmployees( new Minion("harry"));
$boss->addEmployees(new Minion("bob"));
$boss->addEmployees(new Minion("marry"));
$boss->projectFails();
$boss->projectFails();
$boss->projectFails();