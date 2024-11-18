<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Productos</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">">
</head>

<body>
    <div class="container mt-4">
        <h1>Registro de Producto</h1>
        <form id="productForm">
            <div class="form-group container mt-4">
                <label for="productName">Nombre del Producto:</label>
                <input type="text" id="productName" name="productName" required="" class="form-control">
            </div>

            <div class="form-group container mt-4">
                <label for="description">Descripción:</label>
                <textarea id="description" name="description" required=""></textarea>
            </div>

            <div class="form-group container mt-4">
                <label for="price">Precio:</label>
                <input type="number" id="price" name="price" min="0" step="0.01" required="" class="form-control">
            </div>

            <div class="form-group container mt-4">
                <label for="quantity">Cantidad:</label>
                <input type="number" id="quantity" name="quantity" min="1" required="" class="form-control">
            </div>

            <div class="form-group container mt-4">
                <label for="category">Categoría:</label>
                <select id="category" name="category" required="">
                    <option value="">Seleccione una categoría</option>
                    <option value="electronica">Electrónica</option>
                    <option value="ropa">Ropa</option>
                    <option value="alimentos">Alimentos</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Registrar Producto</button>
        </form>
    </div>

    <script>
        // Ejemplo de cómo manejar el envío del formulario
        document.getElementById('productForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const productName = document.getElementById('productName').value;
            const description = document.getElementById('description').value;
            const price = document.getElementById('price').value;
            const quantity = document.getElementById('quantity').value;
            const category = document.getElementById('category').value;

            console.log(`Producto registrado: 
                Nombre: ${productName},
                Descripción: ${description},
                Precio: ${price},
                Cantidad: ${quantity},
                Categoría: ${category}`);
        });
    </script>


</body>

</html>