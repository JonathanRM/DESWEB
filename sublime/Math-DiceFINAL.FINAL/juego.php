<?php
    include 'lib/dado.php'; // dado.php incluye funciones, etc
    include('./BBDD.php');
    include('auth.php'); // clase jugador autentificacion

?>
<html>
    <head>
        <title>Math Dice - Juego</title>
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
            include "lib/menu.php"; // importamos menu
            include "lib/menuUsuario.php"; // importamos menu usuario
        ?>
  
      
        
        <div class='container'>

        <form role="form" action="resultado.php" method="post" class="formularioPrincipalDados"> <!-- Comprobacion del valor -->
          
            <div class="row">
                <div class='col-xs-12'><h1><font color="white">Dados</font></h1></div> <!-- panel dados imgs -->
            </div>
            
            <div class="container-fluid">
             <div class="row">
                <div class='col-xs-9'>
                
                <?php 
                    dado5caras(1); // dado1
                    dado5caras(2); // dado2
                    dado5caras(3); // dado3
                        
                    dado3caras(4); // dado4
                    dado3caras(5); // dado5
                    
                    dado12caras(6); //dado6
                ?>
                
                </div>
                <div class='col-xs-3'>
                <div class="form-group"> <!-- panel donde se escribe la información de los dados -->
                    <label for="text"><font color="white">Elige dado - Valor</font></label><br>
                    <input type="text" size="1" name="eligeDado1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="num1" id="text" size="2">
                </div>
          
                <div class="radio">
                    <label><input type="radio" name="signo" checked value="+"> + </label><br>
                    <label><input type="radio" name="signo" value="-"> - </label>
                </div>
          
                <div class="form-group">
                     <label for="text"><font color="white">Elige dado - Valor</font></label><br>
                     <input type="text" size="1" name="eligeDado2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="num2" size="2">
                </div>
                
                <button type="submit" class="btn btn-default">Calcular</button>
                </div>
            </div>    
            </div>
        </form>
        </div>
        
    </body>
</html>