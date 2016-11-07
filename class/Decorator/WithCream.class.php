<?php 

namespace Decorator;

class WithCream extends CoffeeDecorator{

	public function getBaseCost(){
		 
		return $this->_coffee->getBaseCost() + 1.5;

	}

}

?>