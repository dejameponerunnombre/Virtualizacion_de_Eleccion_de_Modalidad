<?php
include("db.php");
$pepe = 0;
$x = 0;
$ahorasi="SELECT DNI FROM eleccion where ID_Modalidad = 1";
$quesi= $conexion->query($ahorasi);
$siquesi = $quesi ->fetch_array();
for ($q = 0; $q < count($siquesi); $q++)
{    
    $selec = "SELECT DNI FROM eleccion where ID_Modalidad = 1 and DNI != $pepe limit 1";
    $a = $conexion->query($selec);
    $filaeco = $a ->fetch_array();
    $pepe = $filaeco[$x];
    $show2 = "SELECT Nombre FROM alumnos where DNI = $filaeco[$x]";
    $nom = $conexion -> query($show2);
    $nombre = $nom ->fetch_array();
    $show3 = "SELECT PromediosT FROM total where DNI = $filaeco[$x]";
    $prom = $conexion -> query($show3);
    $promedio = $prom ->fetch_array();
    echo $promedio[$x];
}
for ($q = 0; $q < 2; $q++)
{    
    echo $nombre[$q];
    echo $promedio[$q];
}
$pepe = 0;
$ahorasi="SELECT Ingresos from modalidad where ID_Modalidad = 2";
$quesi= $conexion->query($ahorasi);
for ($q = 0; $q < $quesi; $q++)
{
    $selec1 = "SELECT DNI FROM eleccion where ID_Modalidad = 2 and DNI != $pepe";
    $b = $conexion->query($selec1);
    $filanatu = $b ->fetch_array();
    $pepe = $filanatu[$q];
    $show4 = "SELECT Nombre FROM alumnos where DNI = $filanatu[$q]";
    $nom1 = $conexion -> query($show4);
    $fila4[$q] = $nom1 -> fetch_array();
    $show5 = "SELECT PromediosT FROM total where DNI = $filanatu[$q]";
    $prom1 = $conexion -> query($show5);
    $fila5[$q] = $prom1 ->fetch_array();
}
$pepe = 0;
$ahorasi="SELECT Ingresos from modalidad where ID_Modalidad = 3";
$quesi= $conexion->query($ahorasi);
$selec2 = "SELECT DNI FROM eleccion where ID_Modalidad = 3";
$c = $conexion->query($selec2);
$filaelec = $c ->fetch_array();
for ($q = 0; $q < $quesi; $q++)
{
    $selec1 = "SELECT DNI FROM eleccion where ID_Modalidad = 3 and DNI != $pepe";
    $b = $conexion->query($selec1);
    $filaelec = $b ->fetch_array();
    $pepe = $filaelec[$q];
    $show6 = "SELECT Nombre FROM alumnos where DNI = $filaelec[$q]";
    $nom2 = $conexion -> query($show6);
    $fila6[$q] = $nom2 -> fetch_array();
    $show7 = "SELECT PromediosT FROM total where DNI = $filaelec[$q]";
    $prom2 = $conexion -> query($show7);
    $fila7[$q] = $prom2 ->fetch_array();
}
$pepe = 0;
$ahorasi="SELECT Ingresos from modalidad where ID_Modalidad = 4";
$quesi= $conexion->query($ahorasi);
$selec3 = "SELECT DNI FROM eleccion where ID_Modalidad = 4";
$d = $conexion->query($selec3);
$filainfo = $d ->fetch_array();
for ($q = 0; $q < $quesi; $q++)
{
    $selec1 = "SELECT DNI FROM eleccion where ID_Modalidad = 4 and DNI != $pepe";
    $b = $conexion->query($selec1);
    $filaelec = $b ->fetch_array();
    $pepe = $filaelec[$q];
    $show8 = "SELECT Nombre FROM alumnos where DNI = $filainfo[$q]";
    $nom3 = $conexion -> query($show8);
    $fila8[$q] = $nom2 -> fetch_array();
    $show9 = "SELECT PromediosT FROM total where DNI = $filainfo[$q]";
    $prom3 = $conexion -> query($show9);
    $fila9[$q] = $prom3 ->fetch_array();
}
$pepe = 0;
$ahorasi="SELECT Ingresos from modalidad where ID_Modalidad = 5";
$quesi= $conexion->query($ahorasi);
$selec4 = "SELECT DNI FROM eleccion where ID_Modalidad = 5";
$e = $conexion->query($selec4);
$filamulti = $e ->fetch_array();
for ($q = 0; $q < $quesi; $q++)
{
    $selec1 = "SELECT DNI FROM eleccion where ID_Modalidad = 2 and DNI != $pepe";
    $b = $conexion->query($selec1);
    $filamulti = $b ->fetch_array();
    $pepe = $filamulti[$q];
    $show10 = "SELECT Nombre FROM alumnos where DNI = $filamulti[$q]";
    $nom4 = $conexion -> query($show10);
    $fila10[$q] = $nom4 -> fetch_array();
    $show11 = "SELECT PromediosT FROM total where DNI = $filamulti[$q]";
    $prom4 = $conexion -> query($show11);
    $fila11[$q] = $prom4 ->fetch_array();
}

?>