<?php
/**
 * Este es un script de ejemplo para la práctica.
 * Esto es una modificación para probar que actualiza GIT
 * Este script contiene funciones de ejemplo con su respectiva documentación.
 *
 * @package PracticaGarcia
 * @version 1.0
 * @author Iván García
 */

/**
 * Suma dos números y devuelve el resultado.
 *
 * Esta función suma dos números y devuelve el resultado.
 *
 * @param int $num1 El primer número.
 * @param int $num2 El segundo número.
 * @return int El resultado de la suma.
 */
function suma($num1, $num2) {
    return $num1 + $num2;
}

/**
 * Calcula el área de un rectángulo.
 *
 * Esta función calcula el área de un rectángulo dados su base y altura.
 *
 * @param float $base La base del rectángulo.
 * @param float $altura La altura del rectángulo.
 * @return float El área del rectángulo.
 *
 * @internal Esta función es solo para uso interno y no debe ser llamada directamente.
 */
function calcularAreaRectangulo($base, $altura) {
    return $base * $altura;
}
?>
