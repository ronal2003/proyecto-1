<?php
// Nombre del archivo ZIP que se va a crear
$nombre_zip = 'archivos_encapsulados.zip';

// Crear un nuevo objeto ZipArchive
$zip = new ZipArchive();

// Intentar abrir o crear el archivo ZIP
if ($zip->open($nombre_zip, ZipArchive::CREATE) === TRUE) {
    // Verificar si se han enviado archivos
    if (isset($_FILES['archivo'])) {
        $archivos = $_FILES['archivo'];

        // Agregar cada archivo al archivo ZIP
        foreach ($archivos['tmp_name'] as $key => $tmp_name) {
            $nombre_archivo = $archivos['name'][$key];
            $archivo_temporal = $archivos['tmp_name'][$key];

            // Agregar el archivo al ZIP
            $zip->addFile($archivo_temporal, $nombre_archivo);
        }
    }

    // Cerrar el archivo ZIP
    $zip->close();

    echo "Los archivos se han encapsulado en $nombre_zip.";
} else {
    echo "No se pudo crear el archivo ZIP.";
}
