<?php
/**
 * Created by PhpStorm.
 * User: 小水
 * Date: 2021-07-28
 * Time: 11:50
 */

require __DIR__.'/vendor/autoload.php';

use App\Employ;
use App\NastyBoss;

$boss = new NastyBoss();
$boss->addEmployees( Employ::recruit("harry"));
$boss->addEmployees( Employ::recruit("bob"));
$boss->addEmployees( Employ::recruit("marry"));
$boss->projectFails();
$boss->projectFails();
$boss->projectFails();