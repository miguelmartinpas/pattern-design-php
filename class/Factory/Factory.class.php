<?php 

namespace Factory;

class Factory{
	
	public static function Create( $className ){
		
		if ( class_exists( $className ) ){
			
			return new $className();
			
		}else{
			
			throw new \Exception(" La Clase {$className} no existe.");
						
		}
				
	}
	
}

?>