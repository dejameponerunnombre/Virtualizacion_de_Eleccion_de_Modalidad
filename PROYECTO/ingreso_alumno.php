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
    
    

        <title>Ingreso de alumno</title>

    </head>

<?php
if(!isset($_SESSION))
{
    session_start();
}
include("db.php");
if(empty($_POST['DNI']) === false)
{
    $DNI = $_POST['DNI'];
    $_SESSION['DNI'] = $DNI;
}
else
{
    $DNI = $_SESSION['DNI'];
}

$request = "SELECT*FROM alumnos where DNI = '$DNI'";
$resultado=mysqli_query($conexion,$request);
$filas = mysqli_num_rows($resultado);
if($filas > 0)
{
    $_SESSION['x'] = null;
    $_SESSION['variab'] = 1;
    include("ingreso-alumno.php");
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
                        <a href="ingreso-alumno.php"><i class="fa fa-user "></i>Cargar alumno</a>
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
                    <li>
                        <a href="todoscursoss.php"><i class="fa fa-table "></i>Ver alumnos cargados</a>
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
            <form action="carga_alumno.php" method="post"  >
    <div class="temas">


        <div class="temas1">

        <div class="prom">
            <h4>Nombre y Apellido</h4>
            <input step="any" type="text"  name="nombre" value="">           
        </div>   
        <br>
        <div class="inasis">
            <h4>Mail de contacto</h4>
            <input step="any" type="email" name="mail" value="" >
        </div>

        <fieldset id="curso">
            <br>
        <h4>Curso</h4>
        <label for="A" style="margin-left: 15px;">A</label><input type="radio" id="A" value= A name="curso" >
        <label for="B" style="margin-left: 15px;">B</label><input type="radio" id="B"value= B name="curso">
        <label for="C" style="margin-left: 15px;">C</label><input type="radio" id="C"value= C name="curso">
        <label for="D" style="margin-left: 15px;">D</label><input type="radio" id="D"value= D name="curso">
        <label for="E" style="margin-left: 15px;">E</label><input type="radio" id="E"value= E name="curso">
        <label for="G" style="margin-left: 15px;">G</label><input type="radio" id="G"value= G name="curso">
        </fieldset>
        </div>
        <br>
        <div class="temas2">
        <div class="fichas">
            <h4>Usuario</h4>
            <input  type="text" name="usuario" value="">
        </div>
        <br>
        <div class="observ">
            <h4>Contraseña</h4>
            <input type="text" name="contrasenia" value=""> 
        </div>
        </div>
        <br>
        <div class="temas3">
        
        
        <button type="submit" class="m_boton_formulario bttn-pill bttn-md bttn-primary" style="margin-left:0; margin-top:35%;">Enviar</button>
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
</html>
<?php
}