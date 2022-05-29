<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;
 
include("db.php");
 
$consulta = "SELECT*FROM alumnos where Nombre = '$usuario' and CUIL = '$contraseña'";
$ID_Alumno = "SELECT ID_Alumno FROM alumnos where Nombre = '$usuario' and CUIL = '$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
    ?>
    <?php
    include("inicio_logueado_alumno.html");
}else{
    ?>
    <?php
    include("login_alumno_index.html");
    ?>
    <h1> Datos erroneos </h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);


