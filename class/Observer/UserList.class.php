<?php

namespace Observer;

class UserList implements IObservable {

	private $_observers = array();

	public function addCustomer( $name ){
		
		foreach( $this->_observers as $obs ){
			
			$obs->onChanged( $this, $name );
			
		}
		
	}

	public function addObserver( $observer ) {
		
		$this->_observers []= $observer;
		
	}
	
}