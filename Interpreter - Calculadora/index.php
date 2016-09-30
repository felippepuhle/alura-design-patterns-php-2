<?php

function autoloadDeClasses($nomeDaClasse) {
	require $nomeDaClasse.".php";
}
spl_autoload_register("autoloadDeClasses");

$soma = new Soma(new Numero(2), new Numero(3));

echo $soma->avalia();