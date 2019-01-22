<?php

class Router{

	private $routes = [];
	private $request;
	private $response;

	public function __construct(){
		$this->request  = Factory::loadClass('http','Request');
		$this->response = Factory::loadClass('http','Response');
	}	

	/* Retorna o nome padrao do metodo para resolucao (Ex. doGET, doPOST) */
	private function getMethodResolve(){
		return 'do' . $this->request->getMethod();
	}

	/* Retorna os parâmetros enviados na requisição */
    private function getParameter(){
    	return $this->request->getParameterGet();
    }

    /* Instancia o controller responsável por aquela rota */
	private function getController(){
		$sPath = $this->request->getRoute();
		$sCtrl = 'Controller' . $sPath;
		return Factory::loadClass('app',$sCtrl,array($this->getParameter()));
	}

	public function handle(){
		$oController = $this->getController();
		$sMethod     = $this->getMethodResolve();
		$xReturn     = $oController->$sMethod();
		$this->response->doResponse($xReturn);
	}

}
?>