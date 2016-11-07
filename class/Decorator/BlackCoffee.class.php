<?php 

namespace Decorator;

class BlackCoffee extends Coffee{
	
	public function __construct(){
		
		$this->_baseCost = 5;
		
	}
	
}

?>