<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="footer.css">
    <link href="bootstrap.css" rel="stylesheet" />
  
    <link rel="stylesheet" href="boton.css">
    <link href="font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="validacion_DNI.css?v=<?php echo time(); ?>">
    
    

    <title>Control de notas</title>
</head>

<body> 
<?php
session_start();
$DNI = $_SESSION['DNI'];
 
include("db.php");
$request = "SELECT*FROM info where DNI = '$DNI'";
$resultado=mysqli_query($conexion,$request);

$filas = mysqli_num_rows($resultado);

if($filas > 0){
    $consulta1 = "SELECT*FROM info where DNI = $DNI and Anio = 1";
    $consulta2 = "SELECT*FROM info where DNI = $DNI and Anio = 2";
    $consulta3 = "SELECT*FROM info where DNI = $DNI and Anio = 3";
    $datos1 = $conexion -> query($consulta1);
    $datos2 = $conexion -> query($consulta2);
    $datos3 = $conexion -> query($consulta3);
    $fila1 = $datos1 ->fetch_array();
    $fila2 = $datos2 ->fetch_array();
    $fila3 = $datos3 ->fetch_array();
    $_SESSION['filas1'] = $fila1;
    $_SESSION['filas2'] = $fila2;
    $_SESSION['filas3'] = $fila3;
    ?>
    
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="#" ><img src="../IMG/Escuela.png" style="width: 40px; margin-top: 2px;"/></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right"> 
                        <li><a href="form_ingreso_DNI.php">Volver</a></li>
                        <li><a href="inicio.html">Cerrar Sesión</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="../IMG/find_user.png" class="img-responsive" />
                    </li>
                    <li>
                        <a href="form-ingreso.php"><i class="fa fa-desktop "></i>Cargar notas</a>
                    </li>
                    <li>
                        <a href="promedios2.0.php"><i class="fa fa-table "></i>Ver listas de cada modalidad</a>
                    </li>
                    <li>
                        <a href="eliminar-alumno.php"><i class="fa fa-trash-o "></i>Eliminar alumno</a>
                    </li>
                    <li>
                        <a href="form_ingreso_DNI.php"><i class="fa fa-bar-chart-o"></i>Cambiar notas</a>
                    </li>
                    <li>
                        <a href="cambio-eleccion.php"><i class="fa fa-edit "></i>Permitir rehacer elección</a>
                    </li>
                    
                </ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">   
                    </div>
                </div>
                <?php
        $x = empty($_SESSION['x']);
        if($x == false)
        {
            ?>
            <div style="margin-top: 15%; text-align: center; margin-left: 17%; margin-right: 17%; border: 3px outset #172d8d;">
		                        <h2 style="font-weight: 300;">Enviado con éxito</h2>
		                        <p style="font-weight: 600;">La información fue ingresada con éxito</p>
                                <br>
                                <ul>

                                <li><button class="boton2" style="margin-left: 0;"><a style="color:white;"href="form_ingreso_DNI.php">Ingresar otro alumno</a></button></li>

                                
                              </ul>
	                        </div>  
            <?php 
        }
        else
        {
            ?>
            <h2>Ingresar datos de alumno</h2>
            <br>      
            <form action="edicion_de_datos.php" method="post" target="_self" >
            <div class="temas">
            <div class="temas1">
                <div class="prom">
             
                    <h3>Promedios</h3>
                    <p>Promedio de Primer Año: <input step="any" type="number" name="Promedio_1ro" placeholder="<?php echo $fila1["Prom"] ?>"></p>            
                    <p>Promedio de Segundo Año: <input step="any" type="number" name="Promedio_2do" placeholder="<?php echo $fila2["Prom"] ?>"></p>            
                    <p>Promedio de Tercer Año: <input step="any" type="number" name="Promedio_3ro" placeholder="<?php echo $fila3["Prom"] ?>"></p> 
                    
        
                </div>   
                <br>
                <div class="inasis">
                    
                    <h3>Inasistencias</h3>
                    <p>Inasistencias de Primer Año: <input step="any" type="number" name="Inasistencias_1ro" placeholder="<?php echo $fila1["Inasistencias"] ?>"></p>
                    <p>Inasistencias de Segundo Año: <input step="any" type="number" name="Inasistencias_2do" placeholder="<?php echo $fila2["Inasistencias"] ?>"></p>
                    <p>Inasistencias de Tercer Año: <input step="any" type="number" name="Inasistencias_3ro" placeholder="<?php echo $fila3["Inasistencias"] ?>"></p>
                    
        
                </div>
            </div>
                <br>

                <div class="temas2">
                <div class="fichas">
        
                    <h3>Fichas</h3>
                    <p>Fichas de Primer Año: <input type="number" name="Fichas_1ro" placeholder="<?php echo $fila1["Fichas"] ?>"></p>
                    <p>Fichas de Segundo Año: <input type="number" name="Fichas_2do" placeholder="<?php echo $fila2["Fichas"] ?>"></p>
                    <p>Fichas de Tercer Año: <input type="number" name="Fichas_3ro" placeholder="<?php echo $fila3["Fichas"] ?>"></p>
                </div>
                <br>
                <div class="observ">
                
                    <h3>Observaciones</h3>
                    <p>Observaciones de Primer Año: <input type="number" name="Observaciones_1ro" placeholder="<?php echo $fila1["Observaciones"] ?>"></p>
                    <p>Observaciones de Segundo Año: <input type="number" name="Observaciones_2do" placeholder="<?php echo $fila2["Observaciones"] ?>"></p>
                    <p>Observaciones de Tercer Año: <input type="number" name="Observaciones_3ro" placeholder="<?php echo $fila3["Observaciones"] ?>"></p>
                    
                
                </div>
                </div>
                <br>
                <div class="temas3">
                <div class="comen">    
                
                    <h3>Comentario de conducta</h3>
                    <p>Comentario de conducta: <input type="text" name="Comentario" id="comentario"></p>
                
                </div>
            
                <div class="texto-centro">
            
                <ul>
                
                    <li><button type="submit" class="bttn-pill bttn-md bttn-primary">Enviar</button></li>
            
                </ul>

                </div>
        <?php
        } ?>
            </div>    
        </div>
       
        </form>         
    </div>
            </div>
   
        </div>
 
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.metisMenu.js"></script>
    <script src="../js/custom.js"></script>
    
   

    



    </div>
    <footer class="pie-pagina" style="left: 0;" style="right: 0;">
        <div class="grupo-2">
            <small>&copy; 2022 <b>7mo Informática</b> - Grupo 3</small>
        </div>
    </footer>


        <?php   
}else{
    $var = 10;
    $_SESSION['var'] = $var;
    include("form_ingreso_DNI.php");
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>