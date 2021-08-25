<?php
require __DIR__.'/vendor/autoload.php';

$template1 = new \App\ConcreteTemplateA();
$template2 = new \App\ConcreteTemplateB();

$template1->templateMethod();
$template2->templateMethod();
