<?php
class Bootstrap {
	private $instance;
	
	private function __construct() {
		echo "Creando bootstrap.\n";
	}
	
	public static function getInstance() {
		if (! self::$instance instanceof self) {
			self::$instance = new self ();
		}
		return self::$instance;
	}
}

?>