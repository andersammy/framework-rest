<?php

require 'ControllerPadrao.php';

class ControllerUsuario extends ControllerPadrao{
	
	protected function loadModel(){
		return $this->model = Factory::loadClass('app','ModelUsuario');
	}

	
}

?>