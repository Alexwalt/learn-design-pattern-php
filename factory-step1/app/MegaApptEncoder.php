<?php
namespace App;

class MegaApptEncoder extends ApptEncoder
{
    public function encode():string
    {
        return "Appointment data encoded in MegaCal format\n";
    }
}