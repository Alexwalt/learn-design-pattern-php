<?php
namespace App;

class Minion extends Employ
{
    public function fire()
    {
        print "{$this->name}: I'll clear my desk\n";
    }
}