<?php
$inicio = mktime(0, 0, 0, 5, 1, 2022);
$final =  mktime(0, 0, 0, 10, 15, 2022);
$ahora = time() ;
if($ahora < $final && $ahora > $inicio)
{
  $usuario = $_SESSION['usuario'];
  $contraseña = $_SESSION['contraseña']; 
  include("db.php");
  $request = "SELECT Nombre, DNI FROM alumnos where contrasenia = $contraseña";
  $pedido = $conexion -> query($request);
  $alumnos = $pedido -> fetch_array();
  $request="SELECT Situacion, Prioridad FROM eleccion WHERE DNI = $alumnos[1]";
  $pedido = $conexion->query($request);
  $eleccion = $pedido ->fetch_array();
  $request = "SELECT m.Descripcion FROM modalidad m, eleccion e 
  WHERE e.DNI = $alumnos[1] and m.ID_Modalidad = e.ID_Modalidad";
  $pedido = $conexion-> query($request);
  $modalidad = $pedido -> fetch_array();
  ?><h1>El alumno <?php echo $alumnos[0] ?> esta <?php echo $eleccion[0] ?> de <?php echo $modalidad[0]?> en el puesto <?php echo $eleccion[1]?></h1><?php
}
else
{
    include("mensaje-error.html");
}
?>
