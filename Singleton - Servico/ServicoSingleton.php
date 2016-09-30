<?php

class ServicoSingleton {

	private static $instancia;

	public Servico getInstancia() {
		if(is_null($this->instancia)) {
			$this->instancia = new Servico();
		}
		
		return $this->instancia;
	}

}