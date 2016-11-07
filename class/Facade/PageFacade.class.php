<?php 

namespace Facade;

class PageFacade{
	
	public function createAndServer( $id, $msg = "" ){
		
		$db = new Database();
		$data = $db->getData($id);
		
		$template = new Template($id,$data);
		$template->server();
		
		$logger = new Logger();
		$logger->log($msg);
		
	}
	
}

?>