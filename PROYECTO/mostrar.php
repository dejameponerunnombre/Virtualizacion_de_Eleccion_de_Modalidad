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
                
                <li><a href="login_alumno_eleccion.html">Ingreso Alumnos</a></li>
                <li><a href="#contacto">Contacto</a></li>

            </ul>
        </nav>
        
        
        <div class="texto-centro">
           <div class="mesaje_verde" style="color:green;">

            <!--<h1>El alumno <?php echo $alumnos[0] ?> esta <?php echo $eleccion[0] ?> de <?php echo $modalidad[0]?> en el puesto <?php echo $eleccion[1]?></h1>-->
            <h1>Estás <?php echo $eleccion[0] ?> de <?php echo $modalidad[0]?></h1>
            <p>Si tiene alguna consulta o inquietud, porfavor comunicarse con <a href="mailto:secretaria@gmail.com">Secretaría</a></p>

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
