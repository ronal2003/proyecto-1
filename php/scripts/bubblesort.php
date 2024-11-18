<?php

function bubbleSort($myArr)
{
    $arrayLength = sizeof($myArr);

    for ($i = 0; $i < $arrayLength - 1; $i++) {
        $bandera = false;
        for ($j = 0; $j < $arrayLength - $i - 1; $j++) {
            if ($myArr[$j] > $myArr[$j + 1]) {
                $temp = $myArr[$j];
                $myArr[$j] = $myArr[$j + 1];
                $myArr[$j + 1] = $temp;

                $bandera = true;
            }
        }

        if (!$bandera) {
            break;
        }
    }

    return $myArr;
}


$myArray = [64, 34, 25, 12, 22, 11, 90];
echo "Arreglo original: ";
print_r($myArray);

$arrayOrdenado = bubbleSort($myArray);
echo "Arreglo ordenado:";
print_r($arrayOrdenado);
