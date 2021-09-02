<?php
/**
 * Created by PhpStorm.
 * User: icemoon
 * Date: 2021-09-02
 * Time: 22:16
 */

namespace App;


class UrgencyNotification extends Notification
{
	/**
	 * 覆盖父类方法
	 * UrgencyNotification constructor.
	 * @param $msgSender
	 */
	public function __construct( $msgSender )
	{
		$this->msgSender = $msgSender;
	}

	public function notify( $message)
	{
		if(is_array($this->msgSender))
		{
			foreach ($this->msgSender as  $sender){
				$sender->send($message);
			}
		} else{
			$this->msgSender->send($message);

		}
	}
}