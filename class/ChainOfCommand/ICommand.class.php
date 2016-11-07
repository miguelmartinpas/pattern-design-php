<?php 

namespace ChainOfCommand;

interface ICommand {

	function onCommand( $name, $args );

}