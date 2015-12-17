    
    <?php

        include 'lib/dado.php'; // dado.php incluye funciones, etc
        include('auth.php'); // clase jugador autentificacion
    ?>
    
<html>
    <head>
        <title>Math Dice</title>
        <meta charset="UTF-8">
        
        
        
  <!-- LIBRERIAS BOOSTRAPS EN CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    
 <!--------->
    </head>
    <body>
        
    <?php
    include 'lib/menu.php';
    
   echo '<form action="juego.php" method="post" class="formularioInicio" style="height:100;width: 370;margin: 50px 0px 0px 470px">';
   
    echo compruebaPosicionDadoConNumero($_POST['dado1'], $_POST['dado2'], $_POST['dado3'], $_POST['dado4'], $_POST['dado5'], $_POST['dado6'], 
    $_POST['eligeDado1'], $_POST['eligeDado2'], $_POST['signo'], $_POST['num1'], $_POST['num2']); // comprobar si el nº del dado corresponde al introducido y dará "x" operación (le pasamos todos los valores)
    
   echo '</form>';
   
    
    ?>
    
    
    </body>
</html>