<?php

class EmAndamento implements TipoDeContrato {

	public function avanca($contrato) {
		$contrato->setTipo(new Acertado());
	}
	
}