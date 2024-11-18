<?php

/*
    * Crea una función que sea capaz de detectar si existe un viernes 13 en el mes y el año indicados.
    * - La función recibirá el mes y el año y retornará verdadero o falso.
*/

function tieneViernes13($mes, $año)
{
    // Crear una fecha con el día 13 del mes y año dados
    $fecha = DateTime::createFromFormat('d-m-Y', "13-$mes-$año");

    // Verificar si el día de la semana es viernes (5)
    return $fecha && $fecha->format('N') == 5;
}

// Ejemplo de uso
$mes = 9;
$año = 2024;
if (tieneViernes13($mes, $año)) {
    echo "Sí, hay un viernes 13 en $mes/$año.";
} else {
    echo "No, no hay un viernes 13 en $mes/$año.";
}
