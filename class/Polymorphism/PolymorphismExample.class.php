<?php

namespace Polymorphism;

class PolymorphismExample{

	public function example(){

		$square = new Square(5, 5);
		$circle = new Circle(7);

		echo $this->calculateArea($square), "<br/>";
		echo $this->calculateArea($circle);

	}

	public function calculateArea(Shape $shape) {
		return $shape->getArea();
	}


}