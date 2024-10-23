<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = "uploads/";
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];

    // Verifica si se subió un archivo sin errores
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $fileType = mime_content_type($_FILES['file']['tmp_name']);

        // Verifica si el tipo de archivo está permitido
        if (in_array($fileType, $allowedTypes)) {
            $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
            $uniqueID = uniqid();
            $targetFile = $targetDir . $uniqueID . '.' . $extension;

            // Mueve el archivo subido al directorio de destino
            if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
                // Redimensiona la imagen
                resizeImage($targetFile, $extension, 640, 640);
                $fileUrl = $targetFile;
                $message = "Archivo subido exitosamente como <a href='$fileUrl' target='_blank'>" . $uniqueID . '.' . $extension . "</a>";
                $alertType = "success";
            } else {
                $message = "Error al subir el archivo.";
                $alertType = "danger";
            }
        } else {
            $message = "Tipo de archivo no permitido.";
            $alertType = "warning";
        }
    } else {
        $message = "No se subió ningún archivo o hubo un error durante la subida.";
        $alertType = "danger";
    }
}

function resizeImage($file, $extension, $width, $height)
{
    switch ($extension) {
        case 'jpeg':
        case 'jpg':
            $src = imagecreatefromjpeg($file);
            break;
        case 'png':
            $src = imagecreatefrompng($file);
            break;
        case 'gif':
            $src = imagecreatefromgif($file);
            break;
        case 'webp':
            $src = imagecreatefromwebp($file);
            break;
        default:
            return false;
    }

    $dst = imagecreatetruecolor($width, $height);
    $srcWidth = imagesx($src);
    $srcHeight = imagesy($src);

    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $srcWidth, $srcHeight);

    switch ($extension) {
        case 'jpeg':
        case 'jpg':
            imagejpeg($dst, $file);
            break;
        case 'png':
            imagepng($dst, $file);
            break;
        case 'gif':
            imagegif($dst, $file);
            break;
        case 'webp':
            imagewebp($dst, $file);
            break;
    }

    imagedestroy($src);
    imagedestroy($dst);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <title>Subir Imagen</title>
    <style>
        body {
            background-color: azure;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Subir Imagen</h1>
        <?php if (isset($message)): ?>
            <div class="alert alert-<?= $alertType ?>" role="alert">
                <?= $message ?>
            </div>
        <?php endif; ?>
        <form action="./?id=subir" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="file" class="form-label">Elige un archivo de imagen:</label>
                <input type="file" name="file" id="file" class="form-control" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-upload"></i> Subir Imagen</button>
            <a href="./?id=agregar" class="btn btn-secondary ml-2"><i class="fas fa-arrow-left"></i> Volver</a>

        </form>
    </div>
</body>

</html>