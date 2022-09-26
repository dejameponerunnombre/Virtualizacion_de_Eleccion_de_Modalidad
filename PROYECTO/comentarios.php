<?php
$de = 'dielmod7c@gmail.com';
$nombre = $_POST['firstname'];
$email = $_POST['email'];
$duda=$_POST['subject'];
session_start();
$_SESSION['email'] = $email;
include("db.php");
    if(mail($de, $email, $duda))
    {
        echo "La consulta fue realizada el equipo tecnico le estará enviando una respuesta en breves";
    }

    else
    {
        echo "ERROR";
    }