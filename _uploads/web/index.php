<?php
session_start();

// Verifica si la sesión está iniciada y si la variable 'auth' tiene el valor correcto
if (isset($_SESSION['auth']) && $_SESSION['auth'] === 'ba4f78cf00929ec5110a9647e729045f1905aa9631becf395f4d45e8dda61159') {
    // Verifica si 'id' está presente en la URL y si corresponde a un archivo permitido
    $permitidos = ['agregar', 'borrar', 'editar', 'guardar_item', 'guardar_orden', 'subir', 'ver', 'logout'];
    if (isset($_GET['id']) && in_array($_GET['id'], $permitidos)) {
        // Hace un include del archivo correspondiente
        include '_includes/' . $_GET['id'] . '.php';
    } else {
        // Si 'id' no es válido o no está presente, carga 'inicio.php'
        include '_includes/' . 'inicio.php';
    }
} else {
    // Si la sesión no está iniciada o 'auth' no es correcto, carga 'inicio.php'
    include '_includes/' . 'inicio.php';
}
