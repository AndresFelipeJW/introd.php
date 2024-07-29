<?php
// Definir la calificación
$calificacion = 75;

// Clasificar la calificación
if ($calificacion >= 90) {
    echo "Excelente";
} elseif ($calificacion >= 70) {
    echo "Bueno";
} elseif ($calificacion >= 50) {
    echo "Suficiente";
} else {
    echo "Insuficiente";
}
?>