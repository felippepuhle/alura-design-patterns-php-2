<?php

function autoloadDeClasses($nomeDaClasse) {
	require $nomeDaClasse.".php";
}
spl_autoload_register("autoloadDeClasses");

$historico = new Historico();
$contrato = new Contrato(date("d/m/Y"), "Renan", new Novo());

$historico->adiciona($contrato->salvaEstado());
$contrato->avanca();

$historico->adiciona($contrato->salvaEstado());
$contrato->avanca();

$historico->adiciona($contrato->salvaEstado());
$contrato->avanca();

$historico->adiciona($contrato->salvaEstado());
var_dump($contrato->getTipo());
$contrato->restaura($historico->pega(1));
var_dump($contrato->getTipo());