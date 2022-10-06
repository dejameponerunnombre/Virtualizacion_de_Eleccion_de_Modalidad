<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="eleccion.css">
    <script src="https://kit.fontawesome.com/2eed8f0a03.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../IMG/Logo_azul (2).PNG">
    <link rel="stylesheet" href="boton.css">
    <link rel="stylesheet" href="footer.css">
    <title>Elección de Modalidad</title>
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
                
             
                <li><a href="inicio.html">Cerrar sesión</a></li>
                
                
                
            </ul>
        </nav>
        
        

           <a class="arrow" href="#info"></a> 

    </header>
   <?php
   $x = empty($_SESSION['x']);
   if($x == false)
   {
       ?>
                   <div style="margin-top: 15%; text-align: center; margin-left: 17%; margin-right: 17%; border: 3px outset #172d8d;">
                           <h2 style="font-weight: 300;">Eleccion realizada</h2>
                           <p style="font-weight: 900;">La eleccion fue almacenada en el sistema</p>
                           <br>
                           <ul>
                         </ul>
                       </div> 
       <?php 
       $_SESSION['x'] = null;
   }
   else 
   {
    ?>
    <div class="imagen-costado">
        <img src="../IMG/elecciones.jpg" style=" width: 45%; margin-left:65%; margin-top: 3%;">
    </div>
        <div class="linea" style="
            border-left: 3px solid #172d8d;
            height: 80%;
            position:absolute;
            left: 50%;
        "></div>
    <div class="formulario" >
        <p>Seleccione la modalidad u opción a la que desea acceder: </p>
        <br></br>

        <form action="eleccion.php" method = "post">
            
            <input type="radio" name="modalidad" id=1 value=1>
            <label for=1>Economía</label>
        <br></br>
        
        <input type="radio" name="modalidad" id=2 value=2>
        <label for=2>Naturales</label>
        
        <br></br>
        
        <input type="radio" name="modalidad" id=3 value=3>
        <label for=3>Electrónica</label>

        <br></br>

        <input type="radio" name="modalidad" id=4 value=4>
        <label for=4>Informática</label>
        
        <br></br>
        
        <input type="radio" name="modalidad" id=5 value=5>
        <label for=5>Multimedios</label>
        <br></br>

        <input type="radio" name="modalidad" id=10 value=10>
        <label for=10>Cambio de institución</label>
        <br></br>
        
                 
        <button type="submit" class="bttn-pill bttn-md bttn-primary">Enviar</button>
            
        </form>
            
    </div> 
</div>
</div>
</div>

   <?php

   }
   ?>
    <footer class="pie-pagina">
        
        <div class="grupo-2">
            <small>&copy; 2022 <b>7mo Informática</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    
        

    
</body>
</html>