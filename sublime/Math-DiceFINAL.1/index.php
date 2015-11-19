<?php

    if(isset($_SESSION)){
      
      session_destroy();
    }
    
      if (ini_get("session.use_cookies")) { //borrar cookies
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    
?>
<html>
    <head>
        <title>Math Dice - Online</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        
        
        

        <img class="logo" src="img/logobase.png"></img>






 <div class="positionDivForm">
        
            <form action="juego.php" method="post" class="formularioInicio">
                <fieldset>
                            <img src="img/player1.png" width="75" height="75" align="left"/>
                          <input type="hidden" name="jugador">
                          <label for="nombre" class="estiloletra">&nbsp;Nombre&nbsp;&nbsp;</label>  
                          <input id="nombre" name="nombre" type="text" placeholder="..." size="22" required="*">
                          
                          <label for="apellidos" class="estiloletra">&nbsp;Apellido&nbsp;&nbsp;</label>  
                          <input id="apellidos" name="apellidos" type="text" placeholder="..." size="22" required="">
                          <br><br><br>
                            <img src="img/calendar.png" width="75" height="75" align="left"/>
                            <label for="edad" class="estiloletra">&nbsp;&nbsp;Edad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>  
                            <input id="edad" name="edad" type="text" placeholder="..." size="22" required="">
                                <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <label for="tipoJuego" class="estiloletra" >Tipo de juego&nbsp;</label>
                            <select id="tipoJuego" name="tipoJuego">
                              <option value="junior">Junior</option>
                              <option value="junior+">Junior+</option>
                            </select>
                               <br><br>
                          <label for="submit" ></label><br>
                          <button id="submit" name="submit" class="button">Jugar</button>&nbsp;
                          <a href="instrucciones.php" class="button">Instrucciones</a>
                          

                </fieldset>
            </form>
        </div>

        
        
    </body>    
</html>