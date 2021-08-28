<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-08-27
 * Time: 15:38
 */

namespace App;


interface IUserController
{
	public function login($telephone, $password);
	public function register($telephone, $password);
}