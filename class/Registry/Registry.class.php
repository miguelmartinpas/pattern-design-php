<?php  
/**
 * Registers objects and variables
 *
 * Makes objects and variables available to any level
 * of the application without having to keep track
 * of their existence.  Also useful for objects such
 * as database connectors that are used globaly and
 * not to be duplicated.
 *
 * PHP version 5
 * @author Arley Triana Morín
 */

namespace Registry;

class Registry {
	
	/**
	 * Registry of variables and objects
	 * @access private
	 * @var array
	 */
	static private $registry = array();

	/**
	 * Adds an item to the registry
	 * @access static public
	 * @param string item's unique name
	 * @param mixed item
	 * @return boolean
	*/
	static public function add($name, &$item){
		if (!self::exists($name)) {
			self::$registry[$name] = $item;
			return true;
		} else {
			return false;
		}
	}

	/**
	 * Returns true if item is registered
	 * @access static public
	 * @param string item's name
	 * @return boolean
	 */
	static public function exists($name){
		if (is_string($name)) {
			return array_key_exists($name, self::$registry);
		} else {
			throw new Exception('Registry item\'s name must be a string');
		}
	}

	/**
	 * Returns registered item
	 * @access static public
	 * @param string item's name
	 * @return mixed (null if name is not in registry)
	 */
	static public function get($name){
		if (self::exists($name)) {
			$return = self::$registry[$name];
		} else {
			$return = null;
		}
		return $return;
	}

	/**
	 * Removes a registry entry
	 * @access static public
	 * @param string item's name
	 * @return boolean
	 */
	static public function remove($name){
		if (self::exists($name)) {
			unset(self::$registry[$name]);
		}
		return true;
	}

	/**
	 * Clears the entire registry
	 * @access static public
	 * @return boolean
	 */
	static public function clear(){
		self::$registry = array();
	}
}
?>

