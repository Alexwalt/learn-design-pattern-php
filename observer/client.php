<?php
require __DIR__.'/vendor/autoload.php';

$subject = new \App\ConcreteSubject();
$subject->registerObserver(new \App\ShotMessageObserver());
$subject->registerObserver(new \App\EmailObserver());

// 删除注册的观察者
//$subject->removeObserver(new \App\ShotMessageObserver());

$subject->notifyObservers('little water');
