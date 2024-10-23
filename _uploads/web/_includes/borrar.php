<?php
include 'datos.php';

if (isset($_GET['index'])) {
    $index = intval($_GET['index']);
    if (isset($datos[$index])) {
        unset($datos[$index]);
        $datos = array_values($datos); // Reindexar array

        // Escribir el nuevo array en el archivo
        $contenido_php = "<?php\n\$datos = " . var_export($datos, true) . ";\n";
        file_put_contents('_includes/datos.php', $contenido_php);
    }
}

header('Location: ./?id=ver');
exit;
