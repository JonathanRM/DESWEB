

<?php 
      include 'configuracion.php';

    ?>
    
<!DOCTYPE html>
<link rel="stylesheet" href="../dado/css/formulario.css">
<html>
  <head>
      
        
  <title>Math Dice - Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
 
  <!-- LIBRERIAS BOOSTRAPS EN CSS -->
  
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- original  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- original <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!--original  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
  
  <!-- -->
  
  
  <img src="../dado/imgs/wallpaper.jpg" id="fondo"/>
</head>
  <body>
          
       <div>    
       
      


           <center>
            <br>
        <br> 
       <form action="#" style="width: 400px; height: 200px; padding: 10px 40px 0px 40px;
       
     border-radius: 10px 10px 10px 10px;
-moz-border-radius: 10px 10px 10px 10px;
-webkit-border-radius: 10px 10px 10px 10px;
border: 0px solid #000000;

-webkit-box-shadow: 10px 10px 74px -8px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 74px -8px rgba(0,0,0,0.75);
box-shadow: 10px 10px 74px -8px rgba(0,0,0,0.75);


background: rgba(179,220,237,1);
background: -moz-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(42,185,229,0.72) 49%, rgba(41,184,229,0.69) 55%, rgba(74,193,231,0.63) 65%, rgba(188,224,238,0.63) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(179,220,237,1)), color-stop(49%, rgba(42,185,229,0.72)), color-stop(55%, rgba(41,184,229,0.69)), color-stop(65%, rgba(74,193,231,0.63)), color-stop(100%, rgba(188,224,238,0.63)));
background: -webkit-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(42,185,229,0.72) 49%, rgba(41,184,229,0.69) 55%, rgba(74,193,231,0.63) 65%, rgba(188,224,238,0.63) 100%);
background: -o-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(42,185,229,0.72) 49%, rgba(41,184,229,0.69) 55%, rgba(74,193,231,0.63) 65%, rgba(188,224,238,0.63) 100%);
background: -ms-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(42,185,229,0.72) 49%, rgba(41,184,229,0.69) 55%, rgba(74,193,231,0.63) 65%, rgba(188,224,238,0.63) 100%);
background: linear-gradient(to right, rgba(179,220,237,1) 0%, rgba(42,185,229,0.72) 49%, rgba(41,184,229,0.69) 55%, rgba(74,193,231,0.63) 65%, rgba(188,224,238,0.63) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3dced', endColorstr='#bce0ee', GradientType=1 );" >
          
          
          
          
    
       <img src="../dado/imgs/player1.png" width="75" height="75" align="left"/>
        <br>
        <b><font color="#D0D0D0" size="4">Nombre  </font></b><br><input type="text" name="nombreJugador" align="right"/>
        <br>
        <br><img src="../dado/imgs/calendar.png" width="75" height="75" align="left"/>
        <br>
       <b><font color="#D0D0D0"  size="4">Edad  </font></b><br> <input type="text" name="edadJugador" align="right" maxlength="3"/>
        <br>
        <br>
        </center>
      </form>
           </center>
           </div>
        
       <img src="../dado/imgs/wallpaper.jpg" id="fondo"/>
       
       <div>
           <center>
                 <br>
                 <br>
       <a href="juego.php" class="button">Jugar</a>
       
       <a href="instrucciones.php" class="button">Instrucciones</a>
       </center>
       </div>
    </body>

</html>