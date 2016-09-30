<?php

class Acertado implements TipoDeContrato {

	public function avanca($contrato) {
		$contrato->setTipo(new Concluido());
	}
	
}