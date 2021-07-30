<?php
namespace App;

class NastyBoss
{
    private $employees = [];
    public function addEmployees(Employ $employeeName)
    {
        $this->employees[] = $employeeName;
    }

    public function projectFails()
    {
        if(count($this->employees)>0){
            $emp = array_pop($this->employees);
            $emp->fire();
        }
    }
}