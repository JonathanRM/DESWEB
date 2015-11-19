<?php
    include 'lib/dado.php';
    include('auth.php'); // clase jugador

?>
<html>
    <head>
        <title>Math Dice - Online</title>
        <meta charset="UTF-8">
        
        
      <!-- LIBRERIAS BOOSTRAPS EN CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/dado.css">
    
      <!--------->
    </head>
    <body>

        <?php
            include "lib/menu.php";
            include "lib/menuUsuario.php";
        ?>
  
      
        
        <div class='container'>

        <form role="form" action="resultado.php" method="post"> <!-- Comprobacion del valor -->
          
            <div class="row">
                <div class='col-xs-12'><h1><font color="white">Dados</font></h1></div>
            </div>
            
            <div class="container-fluid">
             <div class="row">
                <div class='col-xs-7'>
                
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
                <div class="form-group">
                    <label for="text"><font color="white">Dado 1</font></label><br>
                    <input type="text" size="1" name="eligeDado1"><input type="text" name="num1" id="text">
                </div>
          
                <div class="radio">
                    <label><input type="radio" name="signo" checked value="+"> + </label><br>
                    <label><input type="radio" name="signo" value="-"> - </label>
                </div>
          
                <div class="form-group">
                     <label for="text"><font color="white">Dado 2</font></label><br>
                     <input type="text" size="1" name="eligeDado2"><input type="text" name="num2">
                </div>
                
                <button type="submit" class="btn btn-default">Calcular</button>
                </div>
            </div>    
            </div>
        </form>
        </div>
        
    </body>
</html>