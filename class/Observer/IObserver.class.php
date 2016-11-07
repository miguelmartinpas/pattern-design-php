<?php

namespace Observer;

interface IObserver {
	
	function onChanged( $sender, $args );
	
}