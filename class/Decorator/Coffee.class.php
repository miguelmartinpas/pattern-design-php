<?php 

namespace Decorator;

class Coffee implements ICoffee{

	protected $_baseCost = 0;

	public function getBaseCost() {
		 
		return $this->_baseCost;

	}
}

?>