<?php

class FilaDeExecucao {

	private $fila;

	function __construct() {
		$this->fila = array();
	}

	public function add(Comando $comando) {
		$this->fila[] = $comando;
	}

	public function processa() {
		foreach($this->fila as $comando) {
			$comando->executa();
		}
	}
}