<?php

class Novo implements Status {

	public function paga(Pedido $pedido) {
		$pedido->setStatus(new Pago());
	}

	public function entrega(Pedido $pedido){
		throw new Exception("Apenas pedidos pagos podem ser entregues!");
	}

}