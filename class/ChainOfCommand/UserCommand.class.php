<?php 

namespace ChainOfCommand;

class UserCommand implements ICommand {

	public function onCommand( $name, $args ) {

		if ( $name != 'addUser' )

			return false;

		echo( "UserCommand handling 'addUser'\n" );

		return true;

	}

}
