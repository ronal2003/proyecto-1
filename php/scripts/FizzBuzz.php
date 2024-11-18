<?php
// La famosa serie FizzBuzz para un número natural 
//  es una sucesión desde 
//  hasta 
//  donde:
// Los números que sean múltiplos de 3 se cambian por Fizz.
// Los números que sean múltiplos de 5 se cambian por Buzz.
// Los números que sean múltiplos de 3 y 5 se cambian por FizzBuzz. Escriba un programa que lea 
//  e imprima la serie FizzBuzz.

for ($i = 0; $i <= 30; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz += ";
    } elseif ($i % 3 == 0) {
        echo "Fizz - ";
    } elseif ($i % 5 == 0) {
        echo "Buzz + ";
    }
}
