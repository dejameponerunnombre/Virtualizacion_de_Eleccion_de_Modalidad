<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}  
include("calculo.php");
?>
<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lista de División</title>

    <link href="bootstrap2.css" rel="stylesheet" />
    <link href="font-awesome.css" rel="stylesheet" />
    <link href="custom.css" rel="stylesheet" >
    <link rel="stylesheet" href="tablas.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href=" footer.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="directivos.css">
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
                    <a class="logo" ><img src="../IMG/Escuela.png" style="width: 40px; margin-top: 2px;"/></a>
                    
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
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


                   
                   

                    <!--<li  style="background: #fff;">
                        <a href="#"><i class="fa fa-table "></i>Ver listas de cada modalidad</a>
                    </li>-->

                    
                    
                    <li  style="background: #fff;">
                    
                    
                    <h3>Filtrar por:</h3>                                   
                   


                    <div class="preguntas" style="z-index:1">

                        <div class="wrapper" style="margin-top: 30px;">    
            
                            <div class="wrap-6">
                                <input class="input" type="radio" id="tab-6" name="tabs">
                                <label class="label" for="tab-6"><div>Listas de espera</div><div class="cross"></div> </label>
                                <div class="questions">
                                    <div class="question-wrap">
                                        <input class="input" type="radio" id="question-7" name="question" >
                                        <label class="label" for="question-7"><div>Modalidad</div>  </label>
                                    
                                        <div class="content">
                                            <form action = "xespera.php" method = "post">
                                            <input type="submit" id=1 name="question" value = 1 style="display: none;">
                                                <label for=1 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; cursor:pointer; font-size: 13px; ">Economia</label>
                                                <br>
                                                <input type="submit" id=3 name="question" value = 3 style="display: none;">
                                                <label for=3 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; cursor:pointer; font-size: 13px;">Electrónica</label>
                                                <br>
                                                <input type="submit" id=4 name="question" value = 4 style="display: none;">
                                                <label for=4 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; cursor:pointer; font-size: 13px;">Informatica</label>
                                                <br>                 
                                                <input type="submit" id=2 name="question" value = 2 style="display: none;">
                                                <label for=2 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; cursor:pointer; font-size: 13px;">Naturales</label>
                                                <br>
                                                <input type="submit" id=5 name="question" value = 5 style="display: none;">
                                                <label for=5 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; cursor:pointer; font-size: 13px;">Multimedios</label>
                                            </form>
                                            
                                        </div>
                                        <form action = "xsoloespera.php" method = "post">
                                            <input type="submit" id= "Todas" name="question" value = "Todas" style="display: none;">
                                            <label for="Todas" style="margin-left: 25%; color:#172d8d; cursor:pointer; font-size: 13px;">Todas las Listas</label>
                                        </form>
                                        <br>
                                    </div>
                                
                                        

                                </div>
                                
                            </div>
                            

                                
                        <!--LISTAS CONFIRMADAS-->     
                            

                        <div class="wrap-8">
                                <input class="input" type="radio" id="tab-8" name="tabs">
                                <label class="label" for="tab-8"><div>Listas confirmadas</div><div class="cross"></div> </label>
                                <div class="questions">
                                    <div class="question-wrap">
                                        <input class="input" type="radio" id="question-1" name="question">
                                        <label class="label" for="question-1"><div>Modalidad</div>  </label>
                                        <div class="content">
                                            <form action = "xadentro.php" method = "post">
                                            <input type="submit" id= 6 name="question" value = 1 style="display: none;">
                                                <label for= 6 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; cursor:pointer; font-size: 13px;">Economia</label>
                                                
                                                <input type="submit" id= 8 name="question" value = 3 style="display: none;">
                                                <label for= 8 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; font-size: 13px;">Electrónica</label>
                                                
                                                <input type="submit" id= 9 name="question" value = 4 style="display: none;">
                                                <label for= 9 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; font-size: 13px;">Informatica</label>
                                                
                                                <input type="submit" id= 7 name="question" value = 2 style="display: none;">
                                                <label for= 7 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; font-size: 13px;">Naturales</label>
                                                
                                                <input type="submit" id= 10 name="question" value = 5 style="display: none;">
                                                <label for= 10 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; font-size: 13px;">Multimedios</label>
                                            </form>
                                            
                                        </div>
                                        <form action = "xsoloadentro.php" method = "post">
                                            <input type="submit" name="question" id = "value2" value = "value2" style="display: none;">
                                            <label for="value2" style="margin-left: 25%; color:#172d8d; cursor:pointer; font-size: 13px;">Todas las Listas</label>
                                        </form>
                                        <br>
                                </div>
                            </div>

                            <!--AMBAS LISTAS-->

                        <div class="wrap-9">
                            <input class="input" type="radio" id="tab-9" name="tabs">
                            <label class="label" for="tab-9"><div>Ambas listas</div><div class="cross"></div> </label>
                            <div class="questions">
                                <div class="question-wrap">
                                    <input class="input" type="radio" id="question-3" name="question">
                                    <label class="label" for="question-3"><div>Modalidad</div>  </label>
                                    <div class="content">
                                            <form action = "xmodalidad.php" method = "post">
                                            <input type="submit" id=11 name="question" value = 1 style="display: none;">
                                                <label for=11 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; font-size: 13px;">Economia</label>
                                                <br>
                                                <input type="submit" id=13 name="question" value = 3 style="display: none;">
                                                <label for=13 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; font-size: 13px;">Electrónica</label>
                                                <br>
                                                <input type="submit" id=14 name="question" value = 4 style="display: none;">
                                                <label for=14 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; font-size: 13px;">Informatica</label>
                                                <br>
                                                <input type="submit" id=12 name="question" value = 2 style="display: none;">
                                                <label for=12 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; font-size: 13px;">Naturales</label>
                                                <br>
                                                <input type="submit" id=15 name="question" value = 5 style="display: none;">
                                                <label for=15 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; font-size: 13px;">Multimedios</label>
                                            </form>
                                            
                                        </div>
                                        <form action = "xpromedio.php" method = "post">
                                            <input type="submit" name="question" id = "value3" value = "value3" style="display: none;">
                                            <label for="value3" style="margin-left: 25%; color:#172d8d; cursor:pointer; font-size: 13px;">Todas las Listas</label>
                                        </form>
                                        <br>
                                    </div>
                        </div>


                        <!--CURSOS-->

                        <div class="wrap-7">
                            <input class="input" type="radio" id="tab-7" name="tabs">
                            <label class="label" for="tab-7"><div>Divisiones</div><div class="cross"></div> </label>
                            <div class="questions">
                            <div class="question-wrap">
                            <form action = "sineleccion.php" method = "post">
                                            <input type="submit" id= "a" name="question" value = "a" style="display: none;">
                                                <label for= "a" style="margin-left: 40%; color:#647bde; cursor:pointer; cursor:pointer;">A</label>
                                                <br>
                                                <input type="submit" id="b" name="question" value = "b" style="display: none;">
                                                <label for="b" style="margin-left: 40%; color:#647bde; cursor:pointer; cursor:pointer;">B</label>
                                                <br>
                                                <input type="submit" id="c" name="question" value = "c" style="display: none;">
                                                <label for="c" style="margin-left: 40%; color:#647bde; cursor:pointer; cursor:pointer;">C</label>
                                                <br>
                                                <input type="submit" id="d" name="question" value = "d" style="display: none;">
                                                <label for="d" style="margin-left: 40%; color:#647bde; cursor:pointer; cursor:pointer;">D</label>
                                                <br>
                                                <input type="submit" id="e" name="question" value = "e" style="display: none;">
                                                <label for="e" style="margin-left: 40%; color:#647bde; cursor:pointer; cursor:pointer;">E</label>
                                                <br>
                                                <input type="submit" id="g" name="question" value = "g" style="display: none;">
                                                <label for="g" style="margin-left: 40%; color:#647bde; cursor:pointer; cursor:pointer;">G</label>
                            </form>
                            <form action = "todoscursos.php" method = "post">
                                <input type="submit" id= "p" name="question" value = "p" style="display: none;">
                                <label for= "p" style="margin-left: 22%; font-size: 13px; color:#172d8d; cursor:pointer; cursor:pointer;">Todas las Divisiones</label>
                            </form>
                                </div>
                                </div>
                            
                            </div>
                        </div>
                        </div>    
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" style="z-index:1" >
            <div id="page-inner" >
                <div class="row">

<?php 
$x = $_POST['question'];
$_SESSION['c'] = $x;
include("db.php");
$siquesi[0] = 0;
    $ahorasi="SELECT count(*) FROM alumnos where Curso = '$x'";
    $quesi= $conexion->query($ahorasi);
    $siquesi = $quesi ->fetch_array();
    $alumnos[0] = 0;
    if ($siquesi[0] != 0)
    {
        ?>
        <div class="col-md-12" style="position: relative;display: inline-block;">
        <h1>Listas por División: <span style="color:#040544;">3º <?php echo $x ?></span></h1>
        <br>  
        <div class="datagrid" style="overflow-x:auto;">
        <table border = 1 ><tr><th>Modalidad</th><th>Puesto</th><th>Alumno</th><th>Situación</th><th>Cambio de colegio</th><th>Promedio</th><th>Fichas</th><th>Observaciones</th><th>Inasistencias</th><th>Comentario</th><th>Mes sin adeudamiento de materia</th></tr>
        <?php
        include("db.php");
        $request = "SELECT COUNT(*) FROM alumnos where Curso = '$x' and DNI in(select DNI from eleccion) and DNI in(select DNI from total)";
        $pedido = $conexion -> query($request);
        if($pedido != null)
        {$alumnos = $pedido -> fetch_array();}
        if ($alumnos[0] != 0)
        {
            $DNI[1] = "1";
            $DNI[0] = 0;
            for($y = 1; $y <= $alumnos[0]; $y++)
            {
                $varB = "SELECT DNI, Nombre FROM alumnos where DNI in(select DNI from eleccion) 
                and Curso = '$x' and Nombre > '$DNI[1]' and DNI != $DNI[0] and DNI in(select DNI from total) order by Nombre ASC";
                $connB = $conexion -> query($varB);
                $DNI = $connB ->fetch_array();
                $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario, m.Descripcion, e.Prioridad, e.Situacion, e.Cambio, f.mes
                FROM total t, alumnos a, eleccion e, modalidad m, fecha f
                where a.DNI = $DNI[0] and t.DNI = $DNI[0] and e.DNI = $DNI[0] and e.ID_Modalidad in(select ID_Modalidad from modalidad) and f.ID_mes = t.sin_pendientes";
                $info= $conexion->query($infoalu);
                $datos = $info ->fetch_array();
                ?>
                <tr><td><?php echo $datos["Descripcion"]?></td><td><?php echo $datos["Prioridad"]?></td><td><?php echo $DNI[1]?></td><td><?php echo $datos["Situacion"]?></td><td><?php echo $datos["Cambio"]?></td><td><?php echo $datos["PromediosT"]?></td><td><?php echo $datos["FichasT"]?></td><td><?php echo $datos["ObservacionesT"]?></td><td><?php echo $datos["InasistenciasT"]?></td><td><?php echo $datos["Comentario"]?></td><td><?php echo $datos["mes"] ?></td><tr>
                <?php  
            } 
            $alumnos[0] = 0;  
        }
        $request = "SELECT COUNT(*) FROM alumnos where Curso = '$x' and DNI in(select DNI from total) and DNI not in(select DNI from eleccion)";
        $pedido = $conexion -> query($request);
        if($pedido != null)
        {$alumnos = $pedido -> fetch_array();}
        if ($alumnos[0] != 0)
        {
            $DNI[1] = "1";
            $DNI[0] = 0;
            for($y = 1; $y <= $alumnos[0]; $y++)
            {
                $sinMod = "SELECT t.DNI, a.Nombre FROM alumnos a, total t 
                where  a.DNI NOT IN(SELECT DNI FROM eleccion) and a.Nombre > '$DNI[1]' and t.DNI != $DNI[0] and a.DNI in(select DNI from total) and a.Curso = '$x' order by a.Nombre ASC";
                $sinElex = $conexion -> query($sinMod);
                $DNI = $sinElex ->fetch_array();
                $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario, f.mes
                FROM total t, alumnos a, fecha f
                where a.DNI NOT IN(SELECT DNI FROM eleccion) and  $DNI[0] in(select DNI from alumnos) and $DNI[0] in(select DNI from total) and a.Curso = '$x' and a.DNI in(select DNI from total) and f.ID_mes = t.sin_pendientes";
                $data= $conexion->query($infoalu);
                $fact = $data ->fetch_array();
                ?>
                <tr><td>No realizó la eleccion</td><td>-</td><td><?php echo $DNI[1]?></td><td>-</td><td>-</td><td><?php echo $fact["PromediosT"]?></td><td><?php echo $fact["FichasT"]?></td><td><?php echo $fact["ObservacionesT"]?></td><td><?php echo $fact["InasistenciasT"]?></td><td><?php echo $fact["Comentario"]?></td><td><?php echo $fact["mes"]?></td><tr>
                <?php
            }
            $alumnos[0] = 0;
        }
        $request = "SELECT COUNT(*) FROM alumnos where Curso = '$x' and DNI in(select DNI from eleccion) and DNI not in(select DNI from total)";
        $pedido = $conexion -> query($request);
        if($pedido != null)
        {$alumnos = $pedido -> fetch_array();}
        if ($alumnos[0] != 0)
        {
            $DNI[1] = "A";
            $DNI[0] = 0;
            for($y = 1; $y <= $alumnos[0]; $y++)
            {
                    $sinMod = "SELECT a.DNI, a.Nombre, m.Descripcion, e.Cambio FROM eleccion e, alumnos a, modalidad m 
                    where  a.DNI NOT IN(SELECT DNI FROM total) and a.DNI = e.DNI and a.Nombre > '$DNI[1]' and a.DNI != $DNI[0] and a.Curso = '$x'and e.ID_Modalidad = m.ID_Modalidad order by a.Nombre ASC";
                    $sinElex = $conexion -> query($sinMod);
                    $DNI = $sinElex ->fetch_array();
                    ?>
                    <tr><td><?php echo $DNI["Descripcion"]?></td><td>No ingresado</td><td><?php echo $DNI[1]?></td><td>-</td><td><?php echo $DNI["Cambio"]?></td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><tr>
                    <?php
            }
            $alumnos[0] = 0;
        }
        $request = "SELECT count(*) FROM alumnos where Curso = '$x' and DNI not in(select DNI from eleccion) and DNI not in(select DNI from total)";
        $pedido = $conexion -> query($request);
        if($pedido != null)
        {$alumnos = $pedido -> fetch_array();}
        if ($alumnos[0] != 0)
        {
            $DNI[1] = "A";
            $DNI[0] = 0;
            for($y = 1; $y <= $alumnos[0]; $y++)
            {
                    $sinMod = "SELECT DNI, Nombre from alumnos 
                    where  DNI NOT IN(SELECT DNI FROM total) and DNI NOT IN(SELECT DNI FROM eleccion) and Nombre > '$DNI[1]' and DNI != $DNI[0] and Curso = '$x' order by Nombre ASC";
                    $sinElex = $conexion -> query($sinMod);
                    $DNI = $sinElex ->fetch_array();
                    ?>
                    <tr><td>No realizo la eleccion</td><td>No ingresado</td><td><?php echo $DNI[1]?></td><td>-</td><td>Indefinido</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><tr>
                    <?php
            }
        }       
        ?>
            </table></div>
        <?php
    }
    else
    {
        ?>
        <div class="col-md-12" style="position: relative;display: inline-block;">
        <h1>Listas por División: <span style="color:#040544; font-weight: 900;">3º <?php echo $x ?></span></h1>
        <br>
        <h1 style="text-align: center; margin-left: 50%; transform: translate(-50%, -50%);font-size:  16px; border: 2px solid #172d8d; padding: 10px; margin-top: 30px;">No hay alumnos en esta división</h1>
        <?php
    }
            ?>
</table></div>
<br>
</div>

<button type="submit" class="boton2" style="margin-left: 85%;margin-top:20px;"><a href="Excel1curso.php"style="color:white;"><i class="fa fa-edit "></i>Exportar a Excel</a>   </button>                            

               
                  
<br>
<br>
                             
                    
</div>

        </div>  
    </div>
    </tbody>
<script src="../js/jquery-1.10.2.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.metisMenu.js"></script>
<script src="../js/custom.js"></script>
</div>
</body>
<footer class="pie-pagina" style="left: 0; right: 0; position:fixed; bottom:0;">
<div class="grupo-2">
    <small>&copy; 2022 <b>7mo Informática</b> - Grupo 3</small>
</div>
</footer>

</html>