<?php
include 'datos.php';

if (!isset($_GET['index']) || !isset($datos[$_GET['index']])) {
    header('Location: ./?id=ver');
    exit;
}

$index = intval($_GET['index']);
$item = $datos[$index];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $datos[$index] = [
        'href'   => $_POST['href'],
        'img'    => $_POST['img'],
        'text'   => $_POST['text'],
        'col'    => $_POST['col'],
        'col-lg' => $_POST['col-lg'],
    ];

    // Escribir el nuevo array en el archivo
    $contenido_php = "<?php\n\$datos = " . var_export($datos, true) . ";\n";
    file_put_contents('_includes/datos.php', $contenido_php);

    header('Location: ./?id=ver');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <title>Editar Item</title>
    <style>
        body {
            background-color: azure;
        }
    </style>
</head>

<body class="container py-4">
    <h1>Editar Item</h1>
    <form method="post">
        <div class="mb-3">
            <label for="href" class="form-label">Enlace:</label>
            <input type="text" name="href" id="href" value="<?= htmlspecialchars($item['href']) ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Imagen:</label>
            <input type="text" name="img" id="img" value="<?= htmlspecialchars($item['img']) ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Texto:</label>
            <input type="text" name="text" id="text" value="<?= htmlspecialchars($item['text']) ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="col" class="form-label">Columna Celu:</label>
            <select name="col" id="col" class="form-select">
                <option value="12" <?= $item['col'] == 12 ? 'selected' : '' ?>>12</option>
                <option value="6" <?= $item['col'] == 6 ? 'selected' : '' ?>>6</option>
                <option value="4" <?= $item['col'] == 4 ? 'selected' : '' ?>>4</option>
                <option value="3" <?= $item['col'] == 3 ? 'selected' : '' ?>>3</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="col-lg" class="form-label">Columna PC:</label>
            <select name="col-lg" id="col-lg" class="form-select">
                <option value="12" <?= $item['col-lg'] == 12 ? 'selected' : '' ?>>12</option>
                <option value="6" <?= $item['col-lg'] == 6 ? 'selected' : '' ?>>6</option>
                <option value="4" <?= $item['col-lg'] == 4 ? 'selected' : '' ?>>4</option>
                <option value="3" <?= $item['col-lg'] == 3 ? 'selected' : '' ?>>3</option>
            </select>
        </div>
        <button type="submit" class="btn btn-warning mt-3">Guardar Cambios</button>
    </form>
</body>

</html>