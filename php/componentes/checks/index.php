<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">

        <select name="lista">
            <option value="">-</option>
            <option value="1">opcion 1</option>
            <option value="2">opcion 2</option>
            <option value="3">opcion 3</option>
        </select>

        <input type="checkbox" name="casilla" value="casilla">
        <input type="submit" name="enviar" value="enviar">
    </form>
</body>

</html>

<?php

if ($_REQUEST['enviar'] != '') {
    phpSolo();
}
function phpSolo()
{
    $lista = $_REQUEST['lista'];
    $casilla = $_REQUEST['casilla'];

    if ($casilla != '' && $lista != '') {
        echo "<script>alert('seleccionaste el list y el check al mismo tiempo');</script>";
    } elseif ($casilla != '' || $lista != '') {
        echo "<script>alert('seleccionaste unas de las opciones');</script>";
    } elseif ($casilla == '' && $lista == '') {
        echo "<script>alert('No as seleccionado nada');</script>";
    }
}
