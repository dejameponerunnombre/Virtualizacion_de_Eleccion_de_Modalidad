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
    
    

        <title>Ingreso de notas</title>

    </head>

<?php
session_start();
$anio = $_POST['anio'];
$_SESSION['anio']=$anio;
$DNI = $_SESSION['DNI'];
include("db.php");
$request = "SELECT*FROM alumnos where DNI = '$DNI'";
$resultado=mysqli_query($conexion,$request);
$filas = mysqli_num_rows($resultado);
if($filas > 0)
{
    $request2 = "SELECT*FROM info where DNI = '$DNI'";
    $resultado2 = mysqli_query($conexion,$request2);
    $filas2 = mysqli_num_rows($resultado2);
    if($filas2 > 0){
        $var = 10;
        $_SESSION['var'] = $var;
        include("form-ingreso.php");
        }
    else 
    {
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
                        <li><a href="form-ingreso.php">Volver</a></li>
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
                        <a href="ingreso-alumno.php"><i class="fa fa-desktop "></i>Cargar alumno</a>
                    </li>
                    <li>
                        <a id= 1 href="form-ingreso.php"><i class="fa fa-desktop "></i>Cargar notas</a>
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
                     <h2>Ingresar datos de alumno</h2>   
                    </div>
                </div>              
               
                  <hr />  
                  <br>
            <form action="carga_de_datos.php" method="post"  >
                <div class="temas">
                    <div class="temas1">
                    <div class="prom">
                        <h3>Promedio</h3>
                        <input step="any" type="number"  name="Promedio" value="">     
                        <br> 
                        <br> 
                        <fieldset id="termina">
                            <legend>Cuando dejó de tener materias pendientes?</legend>
                            <input type="radio" id="Noviembre" value="Noviembre" name="termina"><label for="Noviembre">Noviembre</label>
                            <input type="radio" id="Diciembre"value="Diciembre" name="termina"><label for="Diciembre">Diciembre</label>
                            <input type="radio" id="Febrero"value="Febrero" name="termina"><label for="Febrero">Febrero</label>
                            <input type="radio" id="Marzo"value="Marzo" name="termina"><label for="Marzo">Marzo</label>
                        </fieldset>       
                    </div>   
                    <br>
                    <div class="inasis">
                        <h3>Inasistencias en el año</h3>
                        <input step="any" type="number" name="Inasistencias" value="" >
                        <br> 
                    </div>
                </div>
                <br>
                <div class="temas2">
                    <div class="fichas">
                        <h3>Fichas en el año</h3>
                        <input  type="number" name="Fichas" value="">
                        <br> 
                        <br>

                    </div>
                    <br>
                    <div class="observ">
                        <h3>Observaciones en el año</h3>
                        <input type="number" name="Observaciones_1ro" value="">
                        <br> 
                        <br>
                        <fieldset id="curso">
                            <legend>Curso</legend>
                            <input type="radio" id="A" value="A" name="curso"><label for="A">A</label>
                            <input type="radio" id="B"value="B" name="curso"><label for="B">B</label>
                            <input type="radio" id="C"value="C" name="curso"><label for="C">C</label>
                            <input type="radio" id="D" value="D" name="curso"><label for="D">D</label>
                            <input type="radio" id="E"value="E" name="curso"><label for="E">E</label>
                            <input type="radio" id="G"value="G" name="curso"><label for="G">G</label>
                            <input type="radio" id="Otra"value="Otra" name="curso"><label for="Otra">Otra</label>
                        </fieldset>
                    </div>
                </div>
                <br>
                <div class="temas3">
                    <div class="comen">
                        <h3>Comentario de conducta</h3>
                        <input type="text" name="Comentario" id="comentario">
                        <h3>Ciclo Lectivo</h3>
                        <input type="number" name="ciclo_lectivo" id="ciclo_lectivo">
                    </div>
        
                    <br> 
                        <br>
        <button type="submit" class="m_boton_formulario bttn-pill bttn-md bttn-primary">Enviar</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    <footer class="pie-pagina" style="left: 0;" style="right: 0;">
        <div class="grupo-2">
            <small>&copy; 2022 <b>7mo Informática</b> - Grupo 3</small>
        </div>
    </footer>
    <?php
    }
}
else
{
    ?>
    <h1> DNI no existente </h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_free_result($resultado2);
?>






 
    

</html>