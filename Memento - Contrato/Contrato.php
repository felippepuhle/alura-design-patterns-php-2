<?php

class Contrato {

    private $data;
    private $cliente;
    private $tipo;

    function __construct($data, $cliente) {
        $this->data = $data;
        $this->cliente = $cliente;
        $this->tipo = new Novo();
    }

    public function getData() {
        return $this->data;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo(TipoDeContrato $tipo) {
        $this->tipo = $tipo;
    }

    public function avanca() {
        $this->tipo->avanca($this);
    }

    public function salvaEstado() {
        return new Estado(new Contrato($this->data, $this->cliente, $this->tipo));
    }
    
    public function restaura($estado) {
        $this->data = $estado->getEstado()->getData();
        $this->cliente = $estado->getEstado()->getCliente();
        $this->tipo = $estado->getEstado()->getTipo();
    }

}