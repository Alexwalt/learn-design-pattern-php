<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-08-30
 * Time: 08:18
 */

namespace App;

/**
 * 根据type创建相应的策略，采用工厂
 * Class StrategyFactory
 * @package App
 */
class StrategyFactory
{
	const strategies = [
		'A' =>'ImplStrategyA',
		'B' =>'ImplStrategyB'
	];


 	public static function getStrategy($type)
    {

	    if( in_array($type,array_keys(self::strategies))){
	    	//拼接命名空间
		    $className = __NAMESPACE__ . "\\".self::strategies[$type];
		    return new $className();
	    }

	    return null;
    }


}