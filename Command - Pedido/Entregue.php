<?php

class Entregue implements Status {
	
	public function paga(Pedido $pedido) {
		throw new Exception("O pedido já foi entregue!");
	}

	public function entrega(Pedido $pedido){
		throw new Exception("O pedido já foi entregue!");
	}

}