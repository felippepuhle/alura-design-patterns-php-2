<?php

class Pedido {

	private $cliente;
	private $valor;
	private $status;
	private $dataFinalizacao;

	function __construct($cliente, $valor) {
		$this->cliente = $cliente;
		$this->valor = $valor;
		$this->status = new Novo();
	}

	public function getCliente() {
		return $this->cliente;
	}

	public function getValor() {
		return $this->valor;
	}

	public function getStatus() {
		return $this->status;
	}

	public function getDataFinalizacao() {
		return $this->dataFinalizacao;
	}

	public function setStatus(Status $status) { 
		$this->status = $status;
	}

	public function paga() {
		$this->status->paga($this);
	}

	public function finaliza() {
		$this->status->entrega($this);
		$this->dataFinalizacao = date("m/d/Y");
	}

}