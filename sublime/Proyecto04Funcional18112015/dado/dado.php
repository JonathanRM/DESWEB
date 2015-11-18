<html>
	<head>
		<title>Math Dice - Online</title>
	
	
		
	</head>
	
	<body>
	
	  
		<?php
		
		
			
			function lanzarDado(){
				$numero=rand(1, 6);
				return $numero;
				
			}
			
			$valor1=lanzarDado();
      $valor2=lanzarDado();
      $valor3=lanzarDado();
      $valor4=lanzarDado();
      $valor5=lanzarDado();
      

      function lanzarDadoDodecaedro(){
				$numero=rand(1, 6);
				return $numero;
				
			}
			
		
	   
		?>
		
		
		
<div class="container">
  
  
  
  <div class="container-fluid" style="text-align: center;"><div class="row"><div class="col-md-2">
    
      <form action="#" style="width: 350px; height: 220px; padding: 10px 40px 0px 40px;
       
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
        <b><font color="#D0D0D0" size="4">Nombre  </font></b><br><input type="text" name="nombreJugador" align="right" disabled/>
        <br>
        <br><img src="../dado/imgs/star.png" width="75" height="75" align="left"/>
        <br>
       <b><font color="#D0D0D0"  size="4">Puntuacion  </font></b><br> <input type="text" name="scoreJugador" align="right" disabled/>
        <br>
        <br>
         </form>
         
         
    
  </div>
  <div class="col-md-2">
     <form action="resultado.php?valor1=$option" style="margin-left: 300px ;width: 340px; height: 220px; padding: 10px 40px 20px 40px;
       
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
        
          
        <br>
        <font color="#D0D0D0" size="4">Dado 1:  </font><input type="text" name="dado1"/><br>
        
        <br><font color="#D0D0D0" size="4">
        <input type="radio" name="operacion" value="+"/>&nbsp;+ &nbsp;
        <input type="radio" name="operacion" value="-"/>&nbsp;-&nbsp;
        <input type="hidden" name="valor1oculto" value="<?=$valor1;?>"/>
        <input type="hidden" name="valor2oculto" value="<?=$valor2;?>"/>
        <br>
        <br></font>
       <font color="#D0D0D0" size="4"> Dado 2:</font> <input type="text" name="dado2"/>
        <br>
        <br>
        <input type="submit" class="btn-success" name="submit" value="Resultado"/>
    </form><br>
    
    
  </div>
  
  </div></div>
       
    
    
  <div class="row">
    <div class="col-sm-2"><img src='../dado/imgs/<?=$valor1?>.png'></div>
    <div class="col-sm-2"><img src='../dado/imgs/<?=$valor2?>.png'></div>
    <div class="col-sm-2"><img src='../dado/imgs/<?=$valor3?>.png'></div>
    <div class="col-sm-2"><img src='../dado/imgs/<?=$valor4?>.png'></div>
    <div class="col-sm-2"><img src='../dado/imgs/<?=$valor5?>.png'></div>
    
    <div class="col-sm-2" style="position: fixed; padding: 10em">
        
    
     
     
     
      
      
      
      
      
    </div>
  </div>
</div>

	
	</body>
</html>