<?php

function example(array $params)
{
    $nombre = $params['nombre'] ?? null;
    $apellido = $params['apellido'] ?? null;
    $email = $params['email'] ?? null;

    return print_r($params);
}
example([
    'nombre' => 'juan',
    'apellido' => 'rodriguez',
    'email' => 'email'
]);
