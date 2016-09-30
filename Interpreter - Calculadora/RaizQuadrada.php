<?php

class RaizQuadrada implements Expressao {

	private $expressao;

	function __construct(Expressao $e) {
		$this->expressao = $e;
	}

	public function avalia() {
		return sqrt($this->expressao->avalia());
	}

}