<?php

$destino = "melinatroncosoleal@gmail.com";
$name = $_POST["name"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $name . "\nCorreo: " . $email . "\nMensaje: " . $mensaje;
mail($destino, $mensaje, $contenido);
echo "<script>alert('Correo enviado exitosamente.')</script>";
echo "<script> setTimeout(\"location.href='inicio.html'\",1000)</script>";
?>