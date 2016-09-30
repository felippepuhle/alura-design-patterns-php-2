<?php

function autoloadDeClasses($nomeDaClasse) {
	require $nomeDaClasse.".php";
}
spl_autoload_register("autoloadDeClasses");


$pedido1 = new Pedido("Felippe", 1);
$pedido2 = new Pedido("Felippe", 2);
$pedido3 = new Pedido("Felippe", 3);

$fila = new FilaDeExecucao();
$fila->add(new ComandoPagar($pedido1));
$fila->add(new ComandoPagar($pedido2));
$fila->add(new ComandoPagar($pedido3));
$fila->add(new ComandoFinalizar($pedido1));
$fila->processa();