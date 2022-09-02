<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;
include("db.php");
$consult = "SELECT*FROM empleado where Usuario = '$usuario' and Contrasenia = '$contraseña'";
$resultado=mysqli_query($conexion,$consult);
$filas = $resultado -> fetch_array();
$limpiado="UPDATE eleccion SET Prioridad = 0";
$limpio= $conexion->query($limpiado);
for($x = 1; $x <= 5; $x++)
{
    $ahorasi="SELECT Ingresos FROM modalidad where ID_Modalidad = $x";
    $quesi= $conexion->query($ahorasi);
    $siquesi = $quesi ->fetch_array();
    if ($siquesi[0] > 0)
    {
    for($y = 1; $y <= 39 && $y <= $siquesi[0]; $y++)
    {    
        $varB = "SELECT t.DNI FROM total t , eleccion e where t.DNI = e.DNI 
        and e.ID_Modalidad = $x and e.Prioridad = 0 and e.Cambio = 'No' 
        order by t.PromediosT DESC, t.FichasT  ASC, t.ObservacionesT ASC, t.InasistenciasT ASC";
        $connB = $conexion -> query($varB);
        $DNI = $connB ->fetch_array();
        $cant = $connB ->num_rows;
        if($cant == 0)
        {
            $varB = "SELECT t.DNI FROM total t , eleccion e where t.DNI = e.DNI 
            and e.ID_Modalidad = $x and e.Prioridad = 0
            order by t.PromediosT DESC, t.FichasT  ASC, t.ObservacionesT ASC, t.InasistenciasT ASC";
            $connB = $conexion -> query($varB);
            $DNI = $connB ->fetch_array();
        }
        $var2 = "UPDATE eleccion SET Prioridad = '$y', Situacion = 'Dentro de la modalidad' where DNI = $DNI[0]";
        $conn2= $conexion->query($var2);
    }
    }
    if($siquesi[0] > 39)
    {
        for($y = 40; $y <= $siquesi[0]; $y++)
    {   

        $var4 = "UPDATE eleccion SET Situacion = 'En lista de espera' where DNI = $DNI[$i]";
        $conn4 = $conexion->query($var4); 
    }
    }
}
if($filas)
{
 switch($filas['Tipo'])
   {
     case 'Secretaria': {
      include("panel de control.html");
      break;
     }
     case 'Directivo': 
      {
      include('directivos.php');
      break;
    }
  }
}
else
{
  include("login_trabajador_datos.html");
  ?>
  <h1> Datos erroneos </h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
