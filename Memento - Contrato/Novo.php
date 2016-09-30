<?php

class Novo implements TipoDeContrato {

	public function avanca($contrato) {
		$contrato->setTipo(new EmAndamento());
	}

}