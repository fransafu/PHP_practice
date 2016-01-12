<?php
	/*
	Nombre: Multiplicacion rusa recursiva.

	Problema: Obtener el resultado de la multiplicacion rusa, la cual bajo la condicion de que solo se puede
			  multiplicar y dividir por 2, partiendo con (p,q), consiste en aplicar sucesivamente las operaciones 
			  (p/2, q*2) y sumar todo q emparejado con un p impar, hasta que p tome el valor 1. Por ejemplo, para 
			  calcular 54*12, en la sucesion de pares:

			  	(54, 12)
			  	(27, 24)
			  	(13, 48)
			  	(6, 96)
			  	(3, 192)
			  	(1, 384)

			  Donde se suma: 24 + 48 + 192 + 384 = 648 

	*/


	function multipliacionRusa($p, $q){
		$p = intval($p);
		if ($p >= 1 and ($p%2 != 0)) 
			return $q + multipliacionRusa($p/2, $q*2);
		if($p >= 1 and ($p%2 == 0)) 
			return multipliacionRusa($p/2, $q*2);
		if($p < 1) 
			return 0;
	}

	$var = multipliacionRusa(54, 12);
	echo "Resultado: " . $var; // Retorna 648