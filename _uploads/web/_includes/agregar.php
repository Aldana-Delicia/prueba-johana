<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <title>Agregar Nuevo Item</title>
    <style>
        body {
            background-color: azure;
        }
    </style>
</head>

<body class="container py-4">
    <h3>Agregar Nuevo Item</h3>
    <hr>
    <form method="post" action="./?id=guardar_item">
        <div class="mb-3">
            <label for="href" class="form-label">Enlace:</label>
            <input type="text" name="href" id="href" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Imagen:</label>
            <input type="text" name="img" id="img" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Texto:</label>
            <input type="text" name="text" id="text" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="col" class="form-label">Columna Celular:</label>
            <select name="col" id="col" class="form-select">
                <option value="12">12</option>
                <option value="6" selected>6</option>
                <option value="4">4</option>
                <option value="3">3</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="col-lg" class="form-label">Columna PC:</label>
            <select name="col-lg" id="col-lg" class="form-select">
                <option value="12">12</option>
                <option value="6">6</option>
                <option value="4">4</option>
                <option value="3" selected>3</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success mt-3">Guardar Nuevo Item</button>
    </form>
</body>

</html>