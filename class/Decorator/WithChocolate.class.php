<?php 

namespace Decorator;

class WithChocolate extends CoffeeDecorator {

	public function getBaseCost() {
		 
		return $this->_coffee->getBaseCost() + 5;

	}

}

?>