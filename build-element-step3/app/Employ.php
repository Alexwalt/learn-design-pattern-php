<?php
namespace App;

abstract class Employ
{
    protected $name;
    private static $types = ["Minion","CluedUp","WellConnected"];

    public static function recruit($name)
    {
        $num = rand(0,count(self::$types)-1);
        $class = __NAMESPACE__ . "\\" .self::$types[$num];
        return new $class($name);
    }

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function fire();
}
