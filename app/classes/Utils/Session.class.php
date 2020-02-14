<?php
namespace Classes\Utils;
class Session {
	public static function init($name) {
		if (!isset($_SESSION)) {
			# Start our session
			session_name($name);
			session_start();
			setcookie($name,session_id(),0,"/",null,null,true);
		}
	}
	public static function doLogin() {
		
	}
	
	public static function doLogout() {
		if (isset($_SESSION['User'])) {
			session_regenerate_id(true);
			unset($_SESSION['User']);
			header('location: /');
			
		}
	}
}