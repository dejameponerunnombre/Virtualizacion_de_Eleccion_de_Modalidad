<?php 
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
            $no="SELECT DNI from eleccion  where ID_Modalidad = $x and Prioridad = 0 and DNI not in(SELECT DNI from total)";
            $tas = $conexion -> query($no);
            $sinotas = $tas ->fetch_array();
            if(empty($sinotas)==TRUE)
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
            else
            {
                $var4 = "UPDATE eleccion SET Situacion = 'En lista de espera' where DNI = '$sinotas[0]'";
                $conn4 = $conexion->query($var4); 
            }
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
$inicio = mktime(0, 0, 0, 5, 1, 2022);
$final =  mktime(0, 0, 0, 10, 15, 2022);
$ahora = time() ;
if($ahora < $final && $ahora > $inicio)
{
    $DNI = $_SESSION['DNI'];
    include("db.php");
    $request = "SELECT Nombre, DNI FROM alumnos where DNI = '$DNI'";
    $pedido = $conexion -> query($request);
    $alumnos = $pedido -> fetch_array();
    $request="SELECT Situacion, Prioridad FROM eleccion WHERE DNI = $alumnos[1]";
    $pedido = $conexion->query($request);
    $eleccion = $pedido ->fetch_array();
    $request = "SELECT m.Descripcion FROM modalidad m, eleccion e 
    WHERE e.DNI = $alumnos[1] and m.ID_Modalidad = e.ID_Modalidad";
    $pedido = $conexion-> query($request);
    $modalidad = $pedido -> fetch_array();
    ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../IMG/Logo_azul (2).PNG">
    <link rel="stylesheet" href="eleccion.css">

    <link rel="stylesheet" href="footer1.css ?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/2eed8f0a03.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="style.css">
    <title>Resultado de elección</title>
  </head>
  
  <body>

  <header id="arriba" >
        
        <nav>
            <div>

                <a href="inicio.html"><img src="../IMG/logo (3).png" alt="Imagen de fondo" class="logo"></a>

            </div>
            <input type="checkbox" name="check" id="check">
            <label for="check" class="bar-btn">
                <i class="fa-solid fa-bars"></i>  
            </label>
            <ul class="nav-menu">
                
                <li><a href="inicio.html">Cerrar Sesión</a></li>
                

            </ul>
        </nav>
        
        <div class="imagen-costado">
        <img src="../IMG/resultado2.jpg" style="margin-top: 50px;" >
        </div>
  
<br>
<div class="mensaje">
    <h1 style="color:#1c244a; font-size:50px; font-family: serif; text-decoration:underline;">Resultado de la Elección</h1>
    <br>    
    <div style="padding-left: 5%;">
        
        <div  >

            <!--<h1>El alumno <?php echo $alumnos[0] ?> esta <?php echo $eleccion[0] ?> de <?php echo $modalidad[0]?> en el puesto <?php echo $eleccion[1]?></h1>-->
            <h1 style="font-family: inherit; font-size: 26px;">El alumno se encuentra <?php echo $eleccion[0] ?>: <br><br><span style="color:#002f85; padding-left: 25%;text-decoration:underline;"><?php echo $modalidad[0]?></h1>
            <br><br>
            
            
            <p class="hiper">Si tiene alguna consulta o inquietud, por favor comunicarse con <a href="mailto:secretaria@gmail.com"  style="text-decoration: underline; color: blue;">Secretaría</a>.</p>

            </div>
        </div>
</div>
<br>



        
                 
                

    </header>
    
    
    
  



    <footer class="pie-pagina">
        
        <div class="grupo-2">
            <small>&copy; 2022 <b>7mo Informática</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    
  </body>
  </html>
  
  <?php
}
else
{
    include("mensaje-error.html");
}
?>
