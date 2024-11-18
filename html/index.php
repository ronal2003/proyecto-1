<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionalidad enriko</title>
    <script src="../js/funcionalidad.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
</head>

<body>

    <label for="form-label">Producto</label>

    <br>
    <input type="text" id="producto" name="producto">
    <input type="hidden" id="cantidad" name="cantidad">
    <input type="submit" value="Buscar" onclick="ValidarPro(producto)">

    <br>
    <br>
    <br>

    <div class="dropdown">
        <select class="form-select" name="countries" id="countries" multiple>
            <option value="1">Afghanistan</option>
            <option value="2">Australia</option>
            <option value="3">Germany</option>
            <option value="4">Canada</option>
            <option value="5">Russia</option>
        </select>
    </div>

    <script>
        new MultiSelectTag('countries') // id
    </script>

    <div id="resultado">
    </div>

</body>


</html>