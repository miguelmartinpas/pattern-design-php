<?php

namespace ChainOfCommand;

class MailCommand implements ICommand {
	
	public function onCommand( $name, $args ) {
		
		if ( $name != 'mail' ) 
			
			return false;
		
		echo( "MailCommand handling 'mail'\n" );
		
		return true;
		
	}
	
}