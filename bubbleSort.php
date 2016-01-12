<?php

	function mostrarArray($array){
		print_r(array_values($array));
	}

	function agregarElemento($array, $elemento){
		array_push($array, $elemento);
	}

	function bubbleSort($array){
		$lenArray = count($array);

		for($i = 1; $i <= $lenArray; $i++){
			for($j = 0; $j < $lenArray; $j++){
				if (($j + 1) < $lenArray){
					if ($array[$j] > $array[$j + 1]){
						$aux = $array[$j];
						$array[$j] = $array[$j + 1];
						$array[$j + 1] = $aux;
					}
				}
			}
		}

		return $array;
	}

	function main(){
		$array = array(4,3,5,2,1);
		mostrarArray($array);
		$array = bubbleSort($array);
		mostrarArray($array);
	}

	main();