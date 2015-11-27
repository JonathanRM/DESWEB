<?php

    if(isset($_SESSION)){  
      
      session_destroy();  // destruye toda la información asociada con la sesión actual.
    }
    
      if (ini_get("session.use_cookies")) { //borrar cookies
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    
?>
<?php
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
        ?>
  
      
        
        <div class='container'>

        <form action="juego.php" method="post" class="formularioInicio" style="height: 350px"> <!-- Comprobacion del valor -->
          
            
                <div class='col-xs-12'><h2><font color="white">Por favor introduce tus datos</font></h2></div> <!-- panel dados imgs -->
        
            
           
             <div class="row">
              <fieldset>
                            <img src="img/player1.png" width="75" height="75" align="left"/>
                          <input type="hidden" name="jugador">
                          <label for="nombre" class="estiloletra">&nbsp;Nombre&nbsp;&nbsp;</label>  
                          <input id="nombre" name="nombre" type="text" value="<?php echo $jugador1->getNombre()?>" size="22" required="*">
                          
                          <label for="apellidos" class="estiloletra">&nbsp;Apellido&nbsp;&nbsp;</label>  
                          <input id="apellidos" name="apellidos" type="text" value="<?php echo $jugador1->getApellidos()?>" size="22" required="">
                          <br><br><br>
                            <img src="img/calendar.png" width="75" height="75" align="left"/>
                            <label for="edad" class="estiloletra">&nbsp;&nbsp;Edad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>  
                            <input id="edad" name="edad" type="text" value="<?php echo $jugador1->getEdad()?>" size="22" required="">
                                <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <label for="tipoJuego" class="estiloletra" >Tipo de juego&nbsp;</label>
                            <select id="tipoJuego" name="tipoJuego">
                              <option value="junior">Junior</option>
                              <option value="junior+">Junior+</option>
                            </select>
                               <br><br>
              
              
               
                
          
            
          
                
                
                <button type="submit" class="btn btn-default">Salvar datos</button>
     
            </div>    
            </div>
        </form>
        </div>
        
    </body>
</html>