<?php

namespace Observer;

interface IObservable{
	
	function addObserver( $observer );
	
}