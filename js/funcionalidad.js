function ValidarPro(producto) {

    var tabla = document.createElement("table");

    var encabezado = tabla.createTHead();
    var filaEncabezado = encabezado.insertRow();
    var celdaEncabezado = filaEncabezado.insertCell();

    // filaEncabezado.innerHTML = "fila";
    celdaEncabezado.innerHTML = "Encabezado";

    var columnas = 3;
    for (var i = 0; i < columnas; i++) {
        celdaEncabezado = filaEncabezado.insertCell();
        celdaEncabezado.innerHTML = "columna " + (i + 1);

        var filas = 5;
        for (var i = 0; i < filas; i++) {
            var fila = tabla.insertRow();
            var celdaEncabezado = fila.insertCell();
            celdaEncabezado.innerHTML = "Dato " + (i + 1);

        }

        for (var j = 0; j < columnas; j++) {
            var celda = fila.insertCell();
            celda.innerHTML = "Dato " + (j + 1);

        }
    }

    document.getElementById('resultado').appendChild(tabla);
}


new MultiSelectTag('countries', {
    rounded: true,    // default true
    shadow: true,      // default false
    placeholder: 'Search',  // default Search...
    tagColor: {
        textColor: '#327b2c',
        borderColor: '#92e681',
        bgColor: '#eaffe6',
    },
    onChange: function (values) {
        console.log(values)
    }
})