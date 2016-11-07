<?php

/*
Plugin Name: 00.5 - Ingenia global - Patrones de diseño
Plugin URI: http://www.ingeniaglobal.cl
Description: Ejemplo de patrones de diseño.
Version: 1.0
Author: Ingenieria e integración avanzada S.A. (Ingenia)
Author URI: http://www.ingeniaglobal.cl
License: GPL2
*/

/*  Copyright 2013  Ingenieria e integrqación avanzada S.A. (Ingenia)  (email : info@ingenia.es)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

use Prueba\Miguelito as Miguelito;

use Factory\Factory as Factory;

use Singlenton\DatabaseConnection as DatabaseConnection;

use Observer\UserList as UserList;
use Observer\UserListLogger as UserListLogger;

use Registry\Registry as Registry;

use Decorator\BlackCoffee as BlackCoffee;
use Decorator\WithCream as WithCream;
use Decorator\WithMilk as WithMilk;
use Decorator\WithChocolate as WithChocolate;

use ChainOfCommand\CommandChain as CommandChain;
use ChainOfCommand\MailCommand as MailCommand;
use ChainOfCommand\UserCommand as UserCommand;

use Facade\PageFacade as PageFacade;

use Polymorphism\PolymorphismExample as PolymorphismExample;

use Strategy\Cliente as Cliente;
use Strategy\ContadorDecrementa as ContadorDecrementa;
use Strategy\ContadorIncrementa as ContadorIncrementa;


require_once plugin_dir_path( __FILE__ )."loader.php";

try{
	
	// carga de clase de ejemplo
	$p =  new Miguelito();  // --> este funciona	
	$p = Miguelito::getNombre(); // -->este funciona
	
	// Patrón Factory
	$class = "User";
	$namespace = 'Factory';
	$factory = Factory::create($namespace."\\".$class); // este funciona
	echo "###".$factory->getName()."###";
	
	// Patron Singlenton
	$singlenton = DatabaseConnection::getInstance();	
	echo "@".$singlenton->getManejador()."@";
		
	// Patron Observer	
	$ul = new UserList();
	$ul->addObserver( new UserListLogger('A') );
	$ul->addObserver( new UserListLogger('B') );
	$ul->addCustomer( "Jack" );
	
	//Registry
	$item = 'Here is a registered variable';
	Registry::add('variable', $item);
	if (Registry::exists('variable')) {
		echo '<p>"variable" exists</p>';
	} else {
		echo '<p>"variable" does not exists</p>';
	}	
	//removes "Variable"
	Registry::remove('variable');
	
	// decorator
	$coffee = new WithChocolate(new WithMilk(new WithCream(new BlackCoffee())));
	echo 'El precio del cafe es: $' . $coffee->getBaseCost();
	
	// command patter
	$cc = new CommandChain();
	$cc->addCommand( new UserCommand() );
	$cc->addCommand( new MailCommand() );
	$cc->runCommand( 'addUser', null );
	$cc->runCommand( 'mail', null );
	
	//Strategy
	$cliente = new Cliente();
    $cliente->setContador(new ContadorIncrementa());
    $cliente->cuenta();
    echo '<br />';
    $cliente->setContador(new ContadorDecrementa());
    $cliente->cuenta();	
	
	// Facade
	
	$page = new PageFacade();
	$id = 23;
	$page->createAndServer($id,"Creting a page for ID {$id}.");
	
	//PolymorphismExample
	
	$object = new PolymorphismExample();
	
	$object->example();
	
}catch( Exception $e ){
	
	echo $e->getMessage();
	
}

?>