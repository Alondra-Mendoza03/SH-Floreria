<?php
// Generar el certificado
$nombre = $_POST['nombre'];
$email = $_POST['email'];

$contenido_certificado = "Nombre: $nombre\nEmail: $email\nGracias por tu compra. Obtuviste el 40% de descuento en nuestra tienda. Presenta este certificado para hacer válido tu descuento.";

// Guardar el certificado en un archivo
file_put_contents('certificado.txt', $contenido_certificado);

// Descargar el certificado
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="certificado.txt"');
readfile('certificado.txt');
?>
