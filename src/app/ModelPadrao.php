<?php

abstract class ModelPadrao{
	
	protected $table;
	protected $attributes;

	public function __construct(){
		$this->setAttributes();
	}

	abstract protected function setAttributes();

	protected function getFields(){
		return array_keys($this->attributes);
	}

	public function getSQLForSelect(){
		return 'select ' . implode(',', $this->getFields()) .
		       '  from ' . $this->table;
	}

	public function getInformation(Array $aParameters){


	}

}

?>