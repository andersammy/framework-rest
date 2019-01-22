<?php

/**
* @todo garantir integridade dos parâmetros $_POST, $_GET e etc.
*/

class Request{

	public function getMethod(){
		return $_SERVER['REQUEST_METHOD'];
	}

	public function getURI(){
		return $_SERVER['REQUEST_URI'];
	}

	public function getParameterGet(){
		return $_GET;
	}

	public function getParameterPost(){
		return $_POST;
	}

	public function getRoute(){
		//Vamos buscar a rota da URI passada, considerando o último "/"
		$aArray = explode('/',$this->getURI());
		$iIndex = (count($aArray) - 1);

        //Ignora caso tenha parâmetros GET
		$aNewArray = explode('?',$aArray[$iIndex]);
		return $aNewArray[0];
	}
	

}

?>