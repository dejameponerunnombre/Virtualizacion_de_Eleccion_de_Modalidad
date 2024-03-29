<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Secretaría</title>

    <link href="bootstrap.css" rel="stylesheet" />
    <link href="font-awesome.css" rel="stylesheet" />
    <link href="custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="boton.css">
    <link rel="stylesheet" href="footer.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="icon" href="../IMG/Logo_azul (2).PNG">

</head>
<body>
     
            
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="inicio.html" ><img src="../IMG/Escuela.png" style="width: 40px; margin-top: 2px;"/></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="panel de control.html">Volver</a></li>
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
                    </div>
                </div>              
                <?php
                if(!isset($_SESSION)) 
                { 
                    session_start(); 
                }  
                $_SESSION['varia'] = null;
                $_SESSION['vari'] = null;
                $_SESSION['var'] = null; 
                include("db.php");
                $x = empty($_SESSION['x']);
        if($x == false)
        {
            ?>
            <div style="margin-top: 15%; text-align: center; margin-left: 17%; margin-right: 17%; border: 3px outset #172d8d;">
		                        <h2 style="font-weight: 300;">Enviado con éxito</h2>
		                        <p style="font-weight: 900;">La información fue ingresada correctamente</p>
                                <br>
                                <ul>

                                <li><button class="boton2" style="margin-left: 0;"><a style="color:white;"href="ingreso-alumno.php">Ingresar otro alumno</a></button></li>

                                
                              </ul>
	                        </div> 
            <?php 
            $_SESSION['x'] = null;
        }
        else
        {
            if(isset($_SESSION['v'])==TRUE)
            {
                $v = $_SESSION['v'];
            }
            if(empty($v) === true)
            {
                ?>  
                <h2>Ingresar informacion del alumno</h2>   
                <hr />
                <form action="ingreso_alumno.php" method="post"  >
                    <div class="info">
                        <div class="datos">
                            <br>
                            <h3>DNI del alumno</h3>
                            <p><input type="number" name="DNI" id="DNI"></p>
                        </div>
                        <div class="texto-centro">
                            <ul>
                                <li><button type="submit" class="bttn-pill bttn-md bttn-primary" style="margin-top: 3px; margin-left: 50px; border-radius: 100px;">Consultar</button></li>
                            </ul>
                        </div>
                    </form>
                    <?php
                    $vari = empty($_SESSION['variab']);
                    if($vari == false)
                    {   
                        ?> <div class="boton_formulario"> <h2>El alumno ya existe</h2></div>
                        <?php 
                        $_SESSION['variab'] = null;
                    }
                    $_SESSION['v'] = null;
            }
            else
            {
                
                    ?>
                    <div style="margin-top: 15%; text-align: center; margin-left: 17%; margin-right: 17%; border: 3px outset #172d8d;">
                        <h2 style="font-weight: 300;">Algun campo no fue completado</h2>
                        <br>
                        <ul>
                            <li><button class="boton2" style="margin-left: 0;"><a style="color:white;"href="ingreso_alumno.php">Volver a cargar alumno</a></button></li>
                        </ul>
                    </div> 
                    <?php 
                    $_SESSION['v'] = null;
            }
        }
            ?>              
    </div>
            </div>
   
        </div>
 
      <script src="../js/jquery-1.10.2.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/jquery.metisMenu.js"></script>
      <script src="../js/custom.js"></script>
   
</body>
<footer class="pie-pagina" style="left: 0;" style="right: 0;">
    <div class="grupo-2">
        <small>&copy; 2022 <b>7mo Informática</b> - Grupo 3</small>
    </div>
</footer>
</html>