<?php
	// http://localhost/prueba2/index.php?h=11&m=0&s=30
	header("Content-type: image/png");
	require_once("Punto.php");
	require_once("Modelo.php");
	require_once("Color.php");
	require_once("Vista.php");
	require_once("Controlador.php");
	$ancho = 400;
	$alto = 400;
	$v = new Vista();
	$m = new Modelo($_GET['h'], $_GET['m'], $_GET['s'], $ancho, $alto);

	$c = new Controlador();
	$c->exhibir($m, $v);
?>