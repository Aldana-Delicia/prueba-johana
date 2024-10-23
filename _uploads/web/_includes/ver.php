<?php
include 'datos.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <title>Ver y Editar Datos</title>
    <style>
        body {
            background-color: azure;
        }

        #item1 {
            background-color: #BAE1FF;
        }

        #item2 {
            background-color: #FFDFBA;
        }

        #item3 {
            background-color: #FFFFBA;
        }

        #item4 {
            background-color: #BAFFC9;
        }

        #item5 {
            background-color: #FFB3BA;
        }

        #item6 {
            background-color: #D4BAFF;
        }

        #item7 {
            background-color: #FFCCE5;
        }

        #item8 {
            background-color: #FFD1DC;
        }

        #item9 {
            background-color: #FFF0BA;
        }

        #item10 {
            background-color: #C9FFA8;
        }

        #item11 {
            background-color: #BAFFEF;
        }

        #item12 {
            background-color: #FFBAD4;
        }


        .sortable-item {
            cursor: move;
        }
    </style>
</head>

<body class="container py-4">
    <form id="form-orden" method="post" action="./?id=guardar_orden">
        <button type="submit" class="btn btn-primary mt-3">
            <i class="fas fa-save"></i> Guardar Orden
        </button>
        <a href="./?id=agregar" class="btn btn-primary mt-3">
            <i class="fas fa-plus"></i> Agregar Nuevo
        </a>
        <a href="./?id=subir" class=" btn btn-primary mt-3">
            <i class="fas fa-upload"></i> Subir Banner
        </a>
        <a href="./?id=logout" class="btn btn-secondary text-gray-600 mt-3">
            <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
        </a>
        <hr>
        <ul id="sortable" class="list-group">
            <?php foreach ($datos as $index => $item): ?>
                <li id="item<?= $index + 1 ?>" class="list-group-item sortable-item ui-sortable-handle">
                    <input type="hidden" name="orden[]" value="<?= $index ?>">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p><strong>Enlace:</strong> <?= htmlspecialchars($item['href']) ?></p>
                            <p><strong>Imagen:</strong> <img src="<?= htmlspecialchars($item['img']) ?>" alt="" style="max-width: 100px;"></p>
                            <p><strong>Texto:</strong> <?= htmlspecialchars($item['text']) ?></p>
                            <p><strong>Columna Celular:</strong> <?= htmlspecialchars($item['col']) ?> / <strong>Columna PC:</strong> <?= htmlspecialchars($item['col-lg']) ?></p>
                        </div>
                        <div>
                            <a href="./?id=editar&index=<?= $index ?>" class="btn btn-warning">Editar</a>
                            <a href="./?id=borrar&index=<?= $index ?>" class="btn btn-danger">Borrar</a>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(function() {
            $("#sortable").sortable();
        });
    </script>
</body>

</html>