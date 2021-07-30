<?php
namespace App;

class CommsManager
{
    const BLOGGS =1 ;
    const MEGA = 2;
    private $mode;
 
    public function __construct($mode)
    {
        $this->mode = $mode;
    }
    public function getApptEncoder() :ApptEncoder
    {
        switch($this->mode){
            case (self::MEGA):
                return new MegaApptEncoder();
            case (self::BLOGGS):
            default:
                return new BloggsApptEncoder();
        }
      
    }
}