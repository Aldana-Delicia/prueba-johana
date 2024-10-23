<?php
include 'datos.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nuevo_item = [
        'href'   => $_POST['href'],
        'img'    => $_POST['img'],
        'text'   => $_POST['text'],
        'col'    => $_POST['col'],
        'col-lg' => $_POST['col-lg'],
    ];

    $datos[] = $nuevo_item;

    // Escribir el nuevo array en el archivo
    $contenido_php = "<?php\n\$datos = " . var_export($datos, true) . ";\n";
    file_put_contents('_includes/datos.php', $contenido_php);

    header('Location: ./?id=ver');
    exit;
}
