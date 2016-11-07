<?php

namespace Polymorphism;



class Circle implements Shape {
	private $radius;
	 
	public function __construct($radius) {
		$this->radius = $radius;
	}
	 
	public function getArea(){
		return M_PI * $this->radius * $this->radius;
	}
}

?>