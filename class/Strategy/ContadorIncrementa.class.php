<?php

namespace Strategy;

class ContadorIncrementa implements ContadorInterface {

	public function cuenta() {
		for ($i = 1; $i <= 10; $i++) {
			echo $i, ',';
		}
	}

}
?>