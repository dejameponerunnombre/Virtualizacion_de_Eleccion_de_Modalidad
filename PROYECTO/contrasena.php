<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}  
$dni = $_POST['dni'];
$mail = $_POST['mail'];
$_SESSION['dni'] = $dni;
include("db.php");
$de = 'dielmod7c@gmail.com';
$consulta = "SELECT Mail, Contrasenia FROM empleado where Usuario = '$dni' and Mail='$mail'";
$contra= $conexion->query($consulta);
$senia = $contra ->fetch_array();
if($contra=TRUE)
{
    echo $senia["Contrasenia"];
    if(mail($senia["Mail"], "Recuperar Contraseña", $senia["Contrasenia"]))
    {
        echo "Se envio";
    }
}
    else
    {
        include("contrasena.html");
        ?>
            <h1> No se encontró el DNI en la base de datos </h1>
        <?php
}
 