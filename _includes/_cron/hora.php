<?php
// Obtiene el uso horario actual del servidor
$uso_horario = date_default_timezone_get();

// Muestra el uso horario
echo "Uso horario actual: " . $uso_horario . "<br>";

// Obtiene la fecha y hora actual según el uso horario del servidor
$fecha_actual = date('Y-m-d H:i:s');

// Muestra la fecha y hora actual
echo "Fecha y hora actual: " . $fecha_actual;
?>