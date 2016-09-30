<?php

class Pago implements Status {
	
	public function paga(Pedido $pedido) {
		throw new Exception("O pedido já foi pago!");
	}

	public function entrega(Pedido $pedido){
		$pedido->setStatus(new Entregue());
	}

}