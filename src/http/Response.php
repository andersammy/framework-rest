<?php

class Response{
	
	public function doResponse($xJson){
		header('Cache-Control: no-cache, must-revalidate');
		header('Expires: Mon, 20 Jan 2018 05:00:00 GMT');
		header('Content-type: application/json');
		if(isset($xJson)){
			echo json_encode($xJson);
		}
	}

}

?>