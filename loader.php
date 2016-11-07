<?php 

class PatronesDisenoClassAutoloader {
	
	const throwException = false;	
	
	const showLog = false;
	
	public function __construct() {
		
		spl_autoload_register(array($this, 'loader'));
		
	}
	
	private function loader($className) {
		
		$class = plugin_dir_path( __FILE__ ).'class/'.str_replace("\\","/",$className) . '.class.php';	
			
		if (self::showLog) echo $class.": ";
		
		if ( file_exists($class) ){	
			
			if (self::showLog)  echo " Find!!!!!!!<br/>";
			
			require_once $class;
			
		}else{
			
			if (self::showLog)  echo " Not find!!!!!!!<br/>";
			
			if (self::throwException) throw new Exception('Class "' . $className . '" could not be autoloaded'); 
						
		}
		
	}
	
}

$pdLoader = new PatronesDisenoClassAutoloader();

?>