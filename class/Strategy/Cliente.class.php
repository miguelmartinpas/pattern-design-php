<?php

namespace Strategy;

class Cliente {

	private $contador;

	public function setContador(ContadorInterface $cuenta) {
		$this -> contador = $cuenta;
	}

	public function cuenta() {
		$this -> contador -> cuenta();
	}

}
?>