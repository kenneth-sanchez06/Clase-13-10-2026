<?php
$nombre = $_GET['nombre'] ?? 'Nombre no proporcionado';
$edad = $_GET['edad'] ?? 'Edad no proporcionada';   

echo '<h1>' . $nombre . '</h1>';
echo '<p>Edad: ' . $edad . '</p>';
?>