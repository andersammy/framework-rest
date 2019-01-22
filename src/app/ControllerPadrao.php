<?php

abstract class ControllerPadrao{

	private $model;
	private $parameters = array();

	public function __construct($aParameters){
		$this->parameters = $aParameters;
		$this->model      = $this->loadModel();
	}

	abstract protected function loadModel();
	
	public function doGET(){

		return $this->model->getSQLForSelect();

		return $this->parameters; //array('message' => 'oi');
	}

	public function doPOST(){
		return $this->parameters; //array('message' => 'oi');
	}

	public function doPUT(){
		return $this->parameters; //array('message' => 'oi');
	}

	public function doDELETE(){
		return $this->parameters; //array('message' => 'oi');
	}
}

?>