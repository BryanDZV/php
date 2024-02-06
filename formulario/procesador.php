<?php
// Obtener el nombre del archivo y la palabra a buscar del formulario
$archivo_temporal = $_FILES["archivo"]["tmp_name"];
$nombre_archivo = $_FILES["archivo"]["name"];
$palabra = $_POST["palabra"];

// Leer el contenido del archivo
$contenido = file_get_contents($archivo_temporal);

// Contar el número de ocurrencias de la palabra en el contenido
$ocurrencias = substr_count(strtolower($contenido), strtolower($palabra));

// Mostrar el resultado
echo "La palabra '$palabra' aparece $ocurrencias veces en el archivo '$nombre_archivo'.";
?>

