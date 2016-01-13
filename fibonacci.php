<?php

	/*
		Nombre: Fibonacci Serie

		Metodo: 
				f1 = 1
				f2 = 1
				f3 = f1 + f2
				f4 = f2 + f3
				f5 = ...

		Serie: 1,1,2,3,5,8,13, ..., k

	*/

	function fibonacci($n){
		if($n < 2)
			return $n;
		else
			return fibonacci($n -1) + fibonacci($n -2);
	}

	echo fibonacci(6); // Result 8