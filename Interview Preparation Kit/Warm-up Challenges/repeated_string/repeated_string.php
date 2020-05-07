<?php


/**
 * Caso base
 * 		- Letras "a" en la cadena original
 * 
 * Cantidad de letras de la cadena/string
 * Cantidad de veces que se repite el string/cadena
 * Analizar la porcion que no fue analizada, desde el modulo en adelante
 * 
 * Al final se suma la cantidad de cadenas S que entran en N mas el restante 
 * del modulo de N % len(S)
 */
function repeatedString($s, $n) {

	$cant_letra_a_en_s = substr_count($s,"a");

	$cant_letras = strlen($s);
	$resto_repeticion = $n % $cant_letras;
	$cant_repeticion_s = floor($n / $cant_letras);

	// Se trabaja con lo que sobro de s, de la division y el resto
	$letras_a_en_resto_s = substr($s, 0, $resto_repeticion);
	$cant_letra_a_en_resto_s = substr_count($letras_a_en_resto_s,"a");

	$cantTmp = ($cant_repeticion_s * $cant_letra_a_en_s) 
			+ $cant_letra_a_en_resto_s;

	return $cantTmp;
}


echo repeatedString("aba", 10);



?>