<?php

class ComandoFinalizar implements Comando {

	private $pedido;

	function __construct(Pedido $pedido){
		$this->pedido = $pedido;
	}

	public function executa() {
		$this->pedido->finaliza();
	}
	
}