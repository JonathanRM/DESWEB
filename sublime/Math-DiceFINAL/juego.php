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
                <div class='col-xs-12'><h1>Dado aleatorio:</h1></div>
            </div>
            
            <div class="container-fluid">
             <div class="row">
                <div class='col-xs-7'>
                
                <?php 
                    dadoAleatorio(1);
                    dadoAleatorio(2);
                    dadoAleatorio(3);
                        
                    dadoDe3Aleatorio(1);
                    dadoDe3Aleatorio(2);
                    
                    dadoDodecaedro(1);
                ?>
                
                </div>
                <div class='col-xs-3'>
                <div class="form-group">
                    <label for="text">Dado 1</label>
                    <input type="text" class="form-control" name="num1" id="text">
                </div>
          
                <div class="radio">
                    <label><input type="radio" name="signo" checked value="+"> + </label><br>
                    <label><input type="radio" name="signo" value="-"> - </label>
                </div>
          
                <div class="form-group">
                    <label for="text">Dado 2</label>
                    <input type="text" name="num2" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-default">Calcular</button>
                </div>
            </div>    
            </div>
        </form>
        </div>
        
    </body>
</html>