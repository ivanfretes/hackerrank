<?php
/**
 * Enunciado
 * @link https://www.hackerrank.com/challenges/2d-array/
 * 
 */


/**
 * 
 * Se desean obtener 16 valores y retornar el mayor de ellos
 * Representacion del reloj de arena a buscar en la matriz
 * La matriz a continuacion va a iniciar en el seiguiente element
 * 
 *	0 4 3   =>  a[i-1][j-1]  ;  a[i - 1][j]  ; a[i - 1][j + 1]
 *	  1		=>  a[i][i]
 *  8 6 6   =>  a[i + 1][j-1]  ;  a[i + 1][j]  ; a[i + 1][j + 1]
 * 
 */
function hourglassSum($arr) {
	$arr_len = count($arr);
	$max_val = $arr[0][0] + $arr[0][1]  + $arr[0][2]
				+ $arr[1][1]
				+ $arr[2][0] + $arr[2][1]  + $arr[2][2];

	for ($i = 1; $i < $arr_len - 1; $i++) { 
		for ($j = 1; $j < $arr_len - 1; $j++) { 
			
			$sum_val = $arr[$i-1][$j-1] + $arr[$i-1][$j]  + $arr[$i-1][$j+1]
				+ $arr[$i][$j]
				+ $arr[$i+1][$j-1] + $arr[$i+1][$j]  + $arr[$i+1][$j+1];

			if ($max_val <= $sum_val){
				$max_val = $sum_val;
			}
		}
	}

	return $max_val;
}


$arr = [
	[-1,-1,0,-9,-2,-2],
	[-2,-1,-6,-8,-2,-5],
	[-1,-1,-1,-2,-3,-4],
	[-1,-9,-2,-4,-4,-5],
	[-7,-3,-3,-2,-9,-9],
	[-1,-3,-1,-2,-4,-5]
];

echo hourglassSum($arr);

?>