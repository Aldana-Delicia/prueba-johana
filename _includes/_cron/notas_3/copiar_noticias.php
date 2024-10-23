<?php



$sourceUrl = 'https://agenciasanluis.com/wp-content/themes/ansl_theme_v3/consulta_post2.php?id=' . $id;

// Ruta local donde deseas guardar el archivo copiado
$destinationPath = '../../../_notas/' . $slug . '.php';

// Configuración de encabezados personalizados con el User-Agent de Google Chrome
$options = [
    'http' => [
        'method' => "GET",
        'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36\r\n"
    ],
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
    ],
];

// Crea el contexto de flujo con las opciones de encabezados personalizados
$context = stream_context_create($options);

echo "<br><pre>";
echo "sourceUrl: ".$sourceUrl.PHP_EOL;
echo "destinationPath: ".$destinationPath.PHP_EOL;
echo "context: ".$context.PHP_EOL;
echo "</pre><br>";

// Copia el archivo remoto a la ruta local usando el contexto de flujo
if (copy($sourceUrl, $destinationPath, $context)) {
    // Abre el archivo copiado para lectura/escritura
    $fileContent = file_get_contents($destinationPath);

    // Texto que deseas agregar al comienzo
    $textToAdd = "<?php\n\n";
    $textToAdd2 = "$";
    $textToAdd3 = "ansl_url = '";
    $textToAdd4 = "';\n\n";


    // Escribe el texto al inicio del archivo y luego el contenido original
    file_put_contents($destinationPath, $textToAdd . $textToAdd2 . $textToAdd3 . $ansl_url . $textToAdd4  . $fileContent);

    echo "Listo. " . $id;
    echo "<hr>";
} else {
    echo "Error al copiar el archivo. " . $id;
    echo "<hr>";
}
