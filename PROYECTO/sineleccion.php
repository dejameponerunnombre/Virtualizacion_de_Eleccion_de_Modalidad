<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Listas por Curso</title>

    <link href="bootstrap2.css" rel="stylesheet" />
    <link href="font-awesome.css" rel="stylesheet" />
    <link href="custom.css" rel="stylesheet" >
    <link href="tablas.css" rel="stylesheet" />
    <link rel="stylesheet" href=" footer.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="directivos.css">
    

    
    
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
                                                <label for=3 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; cursor:pointer; font-size: 13px;">Electronica</label>
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
                                            <input type="submit" id=1 name="question" value = 1 style="display: none;">
                                                <label for=1 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; cursor:pointer; font-size: 13px;">Economia</label>
                                                <br>
                                                <input type="submit" id=3 name="question" value = 3 style="display: none;">
                                                <label for=3 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; font-size: 13px;">Multimedios</label>
                                                <br>
                                                <input type="submit" id=4 name="question" value = 4 style="display: none;">
                                                <label for=4 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; font-size: 13px;">Informatica</label>
                                                <br>
                                                <input type="submit" id=2 name="question" value = 2 style="display: none;">
                                                <label for=2 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; font-size: 13px;">Naturales</label>
                                                <br>
                                                <input type="submit" id=5 name="question" value = 5 style="display: none;">
                                                <label for=5 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; font-size: 13px;">Multimedios</label>
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
                                            <input type="submit" id=1 name="question" value = 1 style="display: none;">
                                                <label for=1 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; font-size: 13px;">Economia</label>
                                                <br>
                                                <input type="submit" id=3 name="question" value = 3 style="display: none;">
                                                <label for=3 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; font-size: 13px;">Multimedios</label>
                                                <br>
                                                <input type="submit" id=4 name="question" value = 4 style="display: none;">
                                                <label for=4 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; font-size: 13px;">Informatica</label>
                                                <br>
                                                <input type="submit" id=2 name="question" value = 2 style="display: none;">
                                                <label for=2 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; font-size: 13px;">Naturales</label>
                                                <br>
                                                <input type="submit" id=5 name="question" value = 5 style="display: none;">
                                                <label for=5 style="margin-left: 25%; color:#647bde; cursor:pointer; cursor:pointer; font-size: 13px;">Multimedios</label>
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
                            <label class="label" for="tab-7"><div>Cursos</div><div class="cross"></div> </label>
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
                                </form action = "todoscursos.php" method = "post">
                                    <input type="submit" id= "p" name="question" value = "p" style="display: none;">
                                    <label for= "p" style="margin-left: 40%; color:#647bde; cursor:pointer; cursor:pointer;">Todos los Cursos</label>
                                <form>
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
$x="e";
include("db.php");
$ahorasi="SELECT * FROM total t 
Inner join alumnos a
on a.Curso = '$x' where a.DNI = t.DNI";
$quesi= $conexion->query($ahorasi);
$siquesi = $quesi ->fetch_array();
if ($siquesi[0] > 0)
{
    $z=1;
    ?>
        <div class="col-md-12">
            <h2>Listas por División: Curso <span style="color:#040544; font-weight: 900;">3º <?php echo $x ?></span></h2>   
            <hr>
            <div class="datagrid">
                <table border = 1 ><tr><th>Modalidad</th><th>Puesto</th><th>Alumno</th><th>Situacion</th><th>Cambio de colegio</th><th>Promedio</th><th>Fichas</th><th>Observaciones</th><th>Inasistencias</th><th>Comentario</th></tr>
    <?php
    $request = "SELECT COUNT(*) FROM alumnos a INNER join eleccion e ON Curso = '$x' where e.DNI = a.DNI";
    $pedido = $conexion -> query($request);
    $alumnos = $pedido -> fetch_array();
    $DNI[1] = "AAAAAAAA";
    $DNI[0] = 0;
    for($y = 1; $y <= $alumnos[0]; $y++)
    {   
        $varB = "SELECT e.DNI, a.Nombre FROM eleccion e inner join alumnos a on a.DNI = e.DNI 
        where a.Curso = '$x' and a.Nombre > '$DNI[1]' and e.DNI != $DNI[0] order by a.Nombre ASC";
        $connB = $conexion -> query($varB);
        $DNI = $connB ->fetch_array();
        $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario, m.Descripcion, e.Prioridad, e.Situacion, e.Cambio
        FROM total t, alumnos a, eleccion e, modalidad m
        where a.DNI = $DNI[0] and t.DNI = $DNI[0] and e.DNI = $DNI[0] and e.ID_Modalidad = m.ID_Modalidad";
        $info= $conexion->query($infoalu);
        $datos = $info ->fetch_array();
        ?>
        <tr><td><?php echo $datos["Descripcion"]?></td><td><?php echo $datos["Prioridad"]?></td><td><?php echo $DNI[1]?></td><td><?php echo $datos["Situacion"]?></td><td><?php echo $datos["Cambio"]?></td><td><?php echo $datos["PromediosT"]?></td><td><?php echo $datos["FichasT"]?></td><td><?php echo $datos["ObservacionesT"]?></td><td><?php echo $datos["InasistenciasT"]?></td><td><?php echo $datos["Comentario"]?></td><tr>
        <?php  
        $sineleccion="SELECT COUNT(*) FROM alumnos a WHERE a.Curso = '$x' and a.DNI NOT IN(SELECT DNI FROM eleccion)";
        $noe= $conexion->query($sineleccion);
        $nomod = $noe ->fetch_array(); 
    }
    $sineleccion="SELECT COUNT(*) FROM alumnos a WHERE a.Curso = '$x' and a.DNI NOT IN(SELECT DNI FROM eleccion)";
    $noe= $conexion->query($sineleccion);
    $nomod = $noe ->fetch_array(); 
    if ($nomod[0] > 0)
    {
        if($z!=1)
        {
            ?>
            <div class="col-md-12">
                <h2>Listas por División: Curso <span style="color:#040544; font-weight: 900;">3º <?php echo $x ?></span></h2>   
                <hr>
                <div class="datagrid">
                    <table border = 1 ><tr><th>Modalidad</th><th>Puesto</th><th>Alumno</th><th>Situacion</th><th>Cambio de colegio</th><th>Promedio</th><th>Fichas</th><th>Observaciones</th><th>Inasistencias</th><th>Comentario</th></tr>
            <?php
        }
        $aluSinElex[1] = "AAAAAAAA";
        $aluSinElex[0] = 0;
        for($y = 1; $y <= $nomod[0]; $y++)
        {   
            $sinMod = "SELECT t.DNI, a.Nombre FROM eleccion e, alumnos a, total t 
            where  a.DNI NOT IN(SELECT DNI FROM eleccion) and a.Nombre > '$aluSinElex[1]' and t.DNI != $aluSinElex[0] and a.DNI=t.DNI and a.Curso = '$x' order by a.Nombre ASC";
            $sinElex = $conexion -> query($sinMod);
            $aluSinElex = $sinElex ->fetch_array();
            $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario, a.Curso
            FROM total t, alumnos a, eleccion e
            where a.DNI NOT IN(SELECT DNI FROM eleccion) and a.DNI = $aluSinElex[0] and t.DNI = $aluSinElex[0] and a.Curso = '$x'  and a.DNI=t.DNI";
            $data= $conexion->query($infoalu);
            $fact = $data ->fetch_array();
            ?>
                <tr><td>No realizó la eleccion</td><td>-</td><td><?php echo $aluSinElex[1]?></td><td>-</td><td>-</td><td><?php echo $fact["PromediosT"]?></td><td><?php echo $fact["FichasT"]?></td><td><?php echo $fact["ObservacionesT"]?></td><td><?php echo $fact["InasistenciasT"]?></td><td><?php echo $fact["Comentario"]?></td><tr>
            <?php
        }
    }
    else
    {
        ?>  
            <div class="col-md-12" style="position: relative;display: inline-block;">
            <h2>Listas por División: Curso <span style="color:#040544; font-weight: 900;">3º <?php echo $x ?></span></h2>   
            <hr>
            <a class="img" ><img src="../IMG/curso.jpg" style="opacity: 0.2; width: 50%; margin-left: 25%; vertical-align: top;"/></a> 
            <h1 style="text-align: center;position: absolute; top: 50%; margin-left: 50%; transform: translate(-50%, -50%);font-size: 25px;">Todos los alumnos hicieron la eleccion</h1>
        <?php
    }  
}
    else
    {   
        $sineleccion="SELECT COUNT(*) FROM alumnos a WHERE a.Curso = '$x' and a.DNI NOT IN(SELECT DNI FROM eleccion)";
        $noe= $conexion->query($sineleccion);
        $nomod = $noe ->fetch_array(); 
        if ($nomod[0] > 0)
        {
            ?>
                <div class="col-md-12">
                    <h2>Listas por División: Curso <span style="color:#040544; font-weight: 900;">3º <?php echo $x ?></span></h2>   
                    <hr>
                    <div class="datagrid">
                        <table border = 1 ><tr><th>Modalidad</th><th>Puesto</th><th>Alumno</th><th>Situacion</th><th>Cambio de colegio</th><th>Promedio</th><th>Fichas</th><th>Observaciones</th><th>Inasistencias</th><th>Comentario</th></tr>
            <?php
            $aluSinElex[1] = "AAAAAAAA";
            $aluSinElex[0] = 0;
            for($y = 1; $y <= $nomod[0]; $y++)
            {   
                $sinMod = "SELECT t.DNI, a.Nombre FROM eleccion e, alumnos a, total t 
                where  a.DNI NOT IN(SELECT DNI FROM eleccion) and a.Nombre > '$aluSinElex[1]' and t.DNI != $aluSinElex[0] and a.DNI=t.DNI and a.Curso = '$x' order by a.Nombre ASC";
                $sinElex = $conexion -> query($sinMod);
                $aluSinElex = $sinElex ->fetch_array();
                $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario, a.Curso
                FROM total t, alumnos a, eleccion e
                where a.DNI NOT IN(SELECT DNI FROM eleccion) and a.DNI = $aluSinElex[0] and t.DNI = $aluSinElex[0] and a.Curso = '$x'  and a.DNI=t.DNI";
                $data= $conexion->query($infoalu);
                $fact = $data ->fetch_array();
            ?>
                <tr><td>No realizó la eleccion</td><td>-</td><td><?php echo $aluSinElex[1]?></td><td>-</td><td>-</td><td><?php echo $fact["PromediosT"]?></td><td><?php echo $fact["FichasT"]?></td><td><?php echo $fact["ObservacionesT"]?></td><td><?php echo $fact["InasistenciasT"]?></td><td><?php echo $fact["Comentario"]?></td><td>No realizó la eleccion</td><tr>
            <?php
            }
        }
        else
        {
            ?>  
            <div class="col-md-12" style="position: relative;display: inline-block;">
                <h2>Listas por División: Curso <span style="color:#040544; font-weight: 900;">3º <?php echo $x ?></span></h2>   
                <hr>
                <a class="img" ><img src="../IMG/curso.jpg" style="opacity: 0.2; width: 50%; margin-left: 25%; vertical-align: top;"/></a> 
                <h1 style="text-align: center;position: absolute; top: 50%; margin-left: 50%; transform: translate(-50%, -50%);font-size: 25px;">No hay alumnos en este curso</h1>
            <?php 
        }      
    }
            ?>
</table></div>
<?php  
?>

</div>
                                  
               
                  

                             
                    
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
<footer class="pie-pagina" style="left: 0; right: 0; position:fixed; bottom:0;z-index:3">
<div class="grupo-2">
    <small>&copy; 2022 <b>7mo Informática</b> - Grupo 3</small>
</div>
</footer>

</html>
