<?php 

namespace App\Core\Mvc;

trait TSinglton
{
	protected static $instance = null;
	protected function __construct() {}
	
	public static function instance() {
		if (null === static::$instance) {
			static::$instance = new static;
		}
		return static::$instance;
	}
}

?>