<html>
<header><title>Ej. 5 Arrays</title></header>
<body>
	<?php
	// -------------- Arrays para juntar ------------------------
	$modulos01 = array("Bases Datos", "Entornos Desarrollo", "Programación");
	$modulos02 = array("Sistemas Informáticos","FOL","Mecanizado");
	$modulos03 = array("Desarrollo Web ES","Desarrollo Web EC","Despliegue","Desarrollo Interfaces", "Inglés");

	// -------------- METODO 1 ------------------------
	$combinacion01 = implode(',',$modulos01) . ','. implode(',',$modulos02) . ',' . implode(',',$modulos03);
	$combinacion01 = explode(',',$combinacion01);
	var_dump($combinacion01);


	// -------------- METODO 2 ------------------------
	$combinacion02 = array_merge($modulos01,$modulos02,$modulos03);
	var_dump($combinacion02);

	// -------------- METODO 3 ------------------------
	$combinacion03 = array();
	foreach($modulos01 as $m){
		array_push($combinacion03,$m);
	}
	foreach($modulos02 as $m){
		array_push($combinacion03,$m);
	}
	foreach($modulos03 as $m){
		array_push($combinacion03,$m);
	}
	var_dump($combinacion03);
	?>
</body>
</html>
