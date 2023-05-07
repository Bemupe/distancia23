<?php
/**
* 
* Script de PHP con una clase y dos métodos 
* @author Benjamin Mulero Pedrosa
* @version 1.0
*
*/

/**
*
* Esta función devuelve la suma de los argumentos enviados en la llamada
* @param integer $num1 primer número a sumar
* @param integer $num2 segundo número a sumar
* @return integer resultado de la suma de dos números enteros
*
*/
function suma ($num1, $num2)
{
	return $num1 + $num2;
}

/**
*
* Esta función devuelve la resta de los argumentos enviados en la llamada
* @param integer $num1 primer número a restar (minuendo)
* @param integer $num2 segundo número a restar (sustraendo)
* @return integer resultado de la resta de dos números enteros
*
*/
function resta ($num1, $num2)
{
	return $num1 - $num2;
}

echo "Funciones sumar y restar en PHP</br>";
echo "</br> La diferencia entre 40 y 20 es: ".resta(40,20);
echo "</br> La suma de 40 y 20 es: ".suma(40,20);
echo "</br> Hasta luego!!!!!!</br>";

?>
