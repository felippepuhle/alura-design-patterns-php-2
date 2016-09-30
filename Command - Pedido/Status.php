<?php

interface Status {

	public function paga(Pedido $pedido);

	public function entrega(Pedido $pedido);

}