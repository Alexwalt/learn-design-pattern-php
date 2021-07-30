<?php
namespace App;

abstract class Employ
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function fire();
}
