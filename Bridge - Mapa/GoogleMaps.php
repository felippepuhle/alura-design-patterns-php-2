<?php

class GoogleMaps implements Mapa {

	public function devolveMapa($rua) {
    	// codigo aqui que consome o google
		return 'mapa de `' . $rua . '`';
	}

}