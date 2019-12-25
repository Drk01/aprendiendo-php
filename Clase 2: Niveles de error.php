<?php
/**
 * Para más información acerca de los erroes en PHP, visitar:
 * https://www.php.net/manual/es/errorfunc.constants.php
 */

//Errores más comunes en PHP

//Error de sitaxis: Escribir algo que no coincide con la lógica del lenguaje.
echo 'Hola mundo';
echo 'Adios mundo'

//Error fatal: Este tipo de error detiene completamente la ejecución del programa.
funcionInexistente();
echo "Error";

/**
 * Advertencias: Estos tipos de errores no detienen la ejecución del programa pero
 * muestan errores menores en la lógica de programación.
 */
echo 200 / 0;
echo 'Hola mundo';

//Avisos en tiempo de ejecución: Errores menores
$result;
echo $result;
echo 'Final del programa';