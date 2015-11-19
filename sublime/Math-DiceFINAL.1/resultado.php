    
    <?php

        include 'lib/dado.php';
        include('auth.php');
    ?>
    
<html>
    <head>
        <title>Math Dice</title>
        <meta charset="UTF-8">
        
        
        
  <!-- LIBRERIAS BOOSTRAPS EN CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dado.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    
 <!--------->
    </head>
    <body>
        
    <?php
    include 'lib/menu.php';
    
    echo compruebaPosicionDadoConNumero($_POST['dado1'], $_POST['dado2'], $_POST['dado3'], $_POST['dado4'], $_POST['dado5'], $_POST['dado6'], $_POST['dado7'], 
    $_POST['eligeDado1'], $_POST['eligeDado2'], $_POST['signo'], $_POST['num1'], $_POST['num2']); 
    
    
    ?>
    
    
    </body>
</html>