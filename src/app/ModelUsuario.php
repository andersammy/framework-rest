<?php

require 'ModelPadrao.php';

class ModelUsuario extends ModelPadrao{
	
	protected function setAttributes(){

		$this->table = 'tbpessoa';

		$this->attributes['cdpessoa']  = ['type'     => 'integer',
		                                  'validate' => 'required'];
		$this->attributes['dsnome']    = ['type'     => 'string',
		                                  'validate' => 'required'];
	}
}

?>