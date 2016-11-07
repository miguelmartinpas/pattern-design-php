<?php 

namespace Decorator;

abstract class CoffeeDecorator implements ICoffee {

	protected $_coffee;

	public function __construct(ICoffee $Coffee) {
		 
		$this->_coffee = $Coffee;

	}
}

?>