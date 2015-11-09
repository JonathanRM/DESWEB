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
  <div class="row">
    <div class="col-sm-2"><img src='../dado/imgs/<?=$valor1?>.png'></div>
    <div class="col-sm-2"><img src='../dado/imgs/<?=$valor2?>.png'></div>
    <div class="col-sm-2"><img src='../dado/imgs/<?=$valor3?>.png'></div>
    <div class="col-sm-2"><img src='../dado/imgs/<?=$valor4?>.png'></div>
    <div class="col-sm-2"><img src='../dado/imgs/<?=$valor5?>.png'></div>
    
    <div class="col-sm-2" style="position: fixed; padding: 10em">
        
      <form action="resultado.php?valor1=$option" style="margin-top:50px; margin-left:30px;border-radius: 19px 134px 27px 17px;
-moz-border-radius: 19px 134px 27px 17px;
-webkit-border-radius: 19px 134px 27px 17px;
border: 1px inset #403f3e; padding:1em; background-color: silver; overflow: hidden; width: 325px; height: 260px;

background: rgba(226,226,226,1);
background: -moz-linear-gradient(left, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 8%, rgba(209,209,209,1) 39%, rgba(254,254,254,1) 80%, rgba(254,254,254,1) 88%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(226,226,226,1)), color-stop(8%, rgba(219,219,219,1)), color-stop(39%, rgba(209,209,209,1)), color-stop(80%, rgba(254,254,254,1)), color-stop(88%, rgba(254,254,254,1)));
background: -webkit-linear-gradient(left, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 8%, rgba(209,209,209,1) 39%, rgba(254,254,254,1) 80%, rgba(254,254,254,1) 88%);
background: -o-linear-gradient(left, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 8%, rgba(209,209,209,1) 39%, rgba(254,254,254,1) 80%, rgba(254,254,254,1) 88%);
background: -ms-linear-gradient(left, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 8%, rgba(209,209,209,1) 39%, rgba(254,254,254,1) 80%, rgba(254,254,254,1) 88%);
background: linear-gradient(to right, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 8%, rgba(209,209,209,1) 39%, rgba(254,254,254,1) 80%, rgba(254,254,254,1) 88%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2e2e2', endColorstr='#fefefe', GradientType=1 );-webkit-box-shadow: 13px 10px 38px 6px rgba(0,0,0,0.75);" >
        
        <label>
          Operación de los dados 
        </label>  
        <br>
        Dado 1:  <br><input type="text" name="dado1"/>
        <br>
        <br>
        <input type="radio" name="operacion" value="+"/>&nbsp;+ &nbsp;
        <input type="radio" name="operacion" value="-"/>&nbsp;-&nbsp;
        <input type="hidden" name="valor1oculto" value="<?=$valor1;?>"/>
        <input type="hidden" name="valor2oculto" value="<?=$valor2;?>"/>
        <br>
        <br>
        Dado 2: <br> <input type="text" name="dado2"/>
        <br>
        <br>
        <input type="submit" class="btn btn-primary" name="submit" value="Resultado"/>
        
      </form>
      
    </div>
  </div>
</div>

	
	</body>
</html>