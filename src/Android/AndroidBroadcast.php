<?php
namespace PizzaChen\Umeng\Android;

use PizzaChen\Umeng\AndroidNotification;

class AndroidBroadcast extends AndroidNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "broadcast";
	}
}
