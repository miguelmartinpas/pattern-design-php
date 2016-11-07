<?php 

namespace Decorator;

class WithMilk extends CoffeeDecorator {

	public function getBaseCost() {
		 
		return $this->_coffee->getBaseCost() + 4;

	}

}

?>