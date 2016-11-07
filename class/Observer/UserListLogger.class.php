<?php

namespace Observer;

class UserListLogger implements IObserver {
	
	private $id = "-[LETTER]-";
			
	public function __construct( $id ){
		
		if ( !is_null($id) ){
		
			$this->id = "-".$id."-";
		
		}
		
	}	
	
	public function onChanged( $sender, $args ) {
	
		echo( "(Observer '[".$this->id."]'): '$args' added to user list\n" );
	
	}
	
}