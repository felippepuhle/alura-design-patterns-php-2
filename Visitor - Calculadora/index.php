<?php

function autoloadDeClasses($nomeDaClasse) {
	require $nomeDaClasse.".php";
}
spl_autoload_register("autoloadDeClasses");

$impressora = new ImpressoraVisitor();
$soma = new Soma(new Numero(2), new Numero(3));

$soma->aceita($impressora);
echo ' = ';
echo $soma->avalia();