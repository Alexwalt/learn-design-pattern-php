<?php
/**
 * Created by PhpStorm.
 * User: 小水
 * Date: 2021-07-28
 * Time: 11:50
 */

require __DIR__.'/vendor/autoload.php';

$notification = new \App\SevereNotification(new \App\TelephoneSender('182xxxx0001'));
$notification->notify("serve notification");

$notification = new \App\SevereNotification(new \App\EmailSender('alexwalt@xxx.com'));
$notification->notify("serve notification");

$notification = new \App\NormalNotification(new \App\EmailSender('alexwalt@xxx.com'));
$notification->notify("normal notification");

$notification = new \App\TrivialNotification(new \App\WechatSender('wechattoken'));
$notification->notify("normal notification");

$notification = new \App\UrgencyNotification(new \App\WechatSender('wechattoken'));
$notification->notify("normal notification");

//下列代码使用时
//子类重写父类重写函数，去掉 MsgSender 限制
$notification = new \App\UrgencyNotification([new \App\WechatSender('wechattoken'),
											new \App\TelephoneSender('182xxxx0001'),
											new \App\EmailSender('alexwalt@xxx.com') ]);
$notification->notify("Urgency notification");