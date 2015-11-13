

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
           
       
<center><h1><i>Resultado</i></h1></center>
<?php
    if(isset($_GET["valor1oculto"])){  // isset: Determina si una variable está definida y no es NULL
        $valor1oculto=$_GET["valor1oculto"];
        $valor2oculto=$_GET["valor2oculto"];
        $operacion=$_GET["operacion"];
        $dado1=$_GET["dado1"];
        $dado2=$_GET["dado2"];
        $resultado=$dado1+$dado2;
        
        
        if($dado1==$valor1oculto && $dado2==$valor2oculto){
            
            if($operacion=="+"){
                $resultado=$dado1+$dado2;
                print("<p><font size='6'> " .$dado1." ".$operacion." ".$dado2." = ".$resultado."</font></p");
            }else{
                $resultado=($dado1-$dado2)*-1;
                print("Operacion: " .$dado1." ".$operacion." ".$dado2." = ".$resultado);
            }
          
        }else{
            print("Error");
              }
    
    }
?>
      </form>
           </center>
           </div>
        
       <img src="../dado/imgs/wallpaper.jpg" id="fondo"/>
       
       <div>
           
       </div>
    </body>

</html>