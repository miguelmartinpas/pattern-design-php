<?php

namespace Strategy;

class ContadorDecrementa implements ContadorInterface {

	public function cuenta() {
		for ($i = 10; $i > 0; $i--) {
			echo $i, ',';
		}
	}

}
?>