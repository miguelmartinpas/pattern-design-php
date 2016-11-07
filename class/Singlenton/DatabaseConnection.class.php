<?php 

namespace Singlenton;

class DatabaseConnection{
	
	private static $instance = null;
	
	private $manejador = null;
	
	private function __construct(){		
		
		$this->manejador = rand()&4;
		
	}
	
	public static function getInstance(){//getInstance(){	
			
		if ( is_null(self::$instance) ){
			
			$className = __CLASS__;
			
			self::$instance = new $className();
			
		}
		
		return self::$instance;
		
	}

	public function getManejador(){
		
		return $this->manejador;
	}
}

?>