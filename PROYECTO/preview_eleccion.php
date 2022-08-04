<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="form-ingreso.css">

    <title>Agregar infromacion de alumnos</title>
</head>
<body>  
<?php
$DNI = $_POST['DNI'];
session_start(); 
$_SESSION['DNI'] = $DNI;
include("db.php");
$request = "SELECT*FROM alumnos where DNI = '$DNI'";
$resultado=mysqli_query($conexion,$request);
$filas = mysqli_num_rows($resultado);
if($filas > 0)
{
  $array = $resultado -> fetch_array();
  ?>
  <form action = "cambio_eleccion.html" method = "post">
    <div class="info">
    <div class="datos">
      <br>
      <h3>Alumno ingresado:</h3>   
      <p>Nombre: <?php echo $array["Nombre"]?></p>
      <br>
      <p>DNI: <?php echo $array["DNI"]?></p>
    </div>   
    <div class="texto-centro">
      <ul>
        <li><button type="submit" class="bttn-pill bttn-md bttn-primary" style="margin-top: 3px; margin-left: 50px;">Confirmar</button></li>
      </ul>
    </div>
  </form>   
  <?php
}
else
{
  echo"Alumno no ingresado";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>