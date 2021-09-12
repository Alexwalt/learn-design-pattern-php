<?php
/**
 * Created by PhpStorm.
 * User: 小水
 * Date: 2021-07-28
 * Time: 11:50
 */

require __DIR__.'/vendor/autoload.php';

$notification = new \App\SevereNotification(new \App\TelephoneSender('182xxxx0001'));
$notification->notify("Severe notification");

$notification = new \App\SevereNotification(new \App\EmailSender('alexwalt@xxx.com'));
$notification->notify("Severe notification");

$notification = new \App\NormalNotification(new \App\EmailSender('alexwalt@xxx.com'));
$notification->notify("Normal notification");

$notification = new \App\TrivialNotification(new \App\WechatSender('wechattoken'));
$notification->notify("Trivial notification");

$notification = new \App\UrgencyNotification(new \App\WechatSender('wechattoken'));
$notification->notify("Urgency notification");

$notification = new \App\UrgencyNotification(new \App\TelephoneSender('182xxxx0001'));
$notification->notify("Urgency notification");

$notification = new \App\UrgencyNotification(new \App\ShortMessageSender('182xxxx0001'));
$notification->notify("Urgency notification");