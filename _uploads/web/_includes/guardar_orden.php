<?php
include 'datos.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nuevo_array = [];
    foreach ($_POST['orden'] as $index) {
        $nuevo_array[] = $datos[$index];
    }

    // Escribir el nuevo array en el archivo
    $contenido_php = "<?php\n\$datos = " . var_export($nuevo_array, true) . ";\n";
    file_put_contents('_includes/datos.php', $contenido_php);

    header('Location: ./?id=ver');
    exit;
}
