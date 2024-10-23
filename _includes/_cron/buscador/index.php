<?php



$sourceUrl = 'https://sanluis.app/organigrama/_buscador/';

// Ruta local donde deseas guardar el archivo copiado
$destinationPath = '../../../buscador/datos-organigrama.php';


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

// Copia el archivo remoto a la ruta local usando el contexto de flujo
if (copy($sourceUrl, $destinationPath, $context)) {
    // Abre el archivo copiado para lectura/escritura
    $fileContent = file_get_contents($destinationPath);

    // Escribe el texto al inicio del archivo y luego el contenido original
    file_put_contents($destinationPath, $fileContent);

    echo "Listo Buscador datos-organigrama.php";
    echo "<hr>";
} else {
    echo "Error Buscador";
    echo "<hr>";
}
