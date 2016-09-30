<?php

function autoloadDeClasses($nomeDaClasse) {
	require $nomeDaClasse.".php";
}
spl_autoload_register("autoloadDeClasses");

$mapa = new GoogleMaps();
echo $mapa->devolveMapa("Rua Vergueiro, 3185");