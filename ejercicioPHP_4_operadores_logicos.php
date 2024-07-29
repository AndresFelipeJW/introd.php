<?php
// Definir edad y estado de la identificación
$edad = 18;
$identificacion_valida = true;

// Verificar si la persona puede votar
if ($edad >= 18 && $identificacion_valida) {
    echo "La persona puede votar.";
} else {
    echo "La persona no puede votar.";
}
?>