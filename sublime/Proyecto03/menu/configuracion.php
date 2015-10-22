<?php

//Array multilenguaje			// MENU en PHP // Jonathan
$lang="sp";

$menu=array(
	"titulo"=>array(
		"sp"=>"Math Dice",
		"en"=>"Math dice"
	    ),
	"portada"=>array(
		"sp"=>"Inicio",
		"en"=>"Home"
		),
	"instrucciones"=>array(
		"sp"=>"Instrucciones",
		"en"=>"Instructions"
		),
		"ayuda"=>array(
		"sp"=>"Ayuda",
		"en"=>"Help",
		"submenu2"=>array(
			"tipo1"=>array(
				"sp"=>"Preguntas frecuentes",
				"en"=>"FAQ",
			),
			"tipo2"=>array(
				"sp"=>"Foro de ayuda",
				"en"=>"Help forum",
				),
				),
				),
		"contacto"=>array(
		"sp"=>"Contacto",
		"en"=>"Contact"
		),
	"tiposJuego"=>array(
		"sp"=>"Tipos de juego",
		"en"=>"Game choice",
		"submenu"=>array(
			"tipo1"=>array(
				"sp"=>"Juego tradicional",
				"en"=>"Traditional game",
			),
			"tipo2"=>array(
				"sp"=>"Juego modificado",
				"en"=>"Game modified",
				),
			"tipo3"=>array(
				"sp"=>"Juego niños",
				"en"=>"Kid game",
				)
			)
		)
	)

?>		





				<!-- BOOTSTRAP HTML -->
<!DOCTYPE html>
<html lang="sp">
    



<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php echo $menu['titulo'][$lang]?></a>  <!-- Mostrar titulo de php -->
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><?php echo $menu['portada'][$lang]?></a></li><!-- Mostrar inicio de php -->
  <!---->      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $menu['tiposJuego'][$lang]?><span class="caret"></span></a><!-- Mostrar tipos de juego de php -->
          <ul class="dropdown-menu"> 
          
          
          <!-- For each de tipos de juego -->
      
             <?php 
                    foreach( $menu['tiposJuego'] as $clave => $valor ){ // Las claves de tipos de juego las guarda en valor
                      
                      if($clave == 'submenu'){  // Si la clave es igual a submenu entrará y ...
                         
                        foreach ($valor as $juegos){    // Los valores los mostrará en juegos?>   
                            <li><a href="#"><?php echo $juegos[$lang] ?></a></li>
                    <?php } 
                         }
                    } ?>
                  </ul>
   <!----></li>
        <li><a href="#"><?php echo $menu['instrucciones'][$lang]?></a></li>
        <li><a href="#"><?php echo $menu['contacto'][$lang]?></a></li>
   <!-- nuevo submenu -->     
   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $menu['ayuda'][$lang]?><span class="caret"></span></a><!-- Mostrar tipos de juego de php -->
          <ul class="dropdown-menu"> 
          
          
    <!-- For each de ayuda -->
      
             <?php 
                    foreach( $menu['ayuda'] as $clave => $valor ){ // Las claves de tipos de juego las guarda en valor
                      
                      if($clave == 'submenu2'){  // Si la clave es igual a submenu entrará y ...
                         
                        foreach ($valor as $juegos){    // Los valores los mostrará en juegos?>   
                            <li><a href="#"><?php echo $juegos[$lang] ?></a></li>
                    <?php } 
                         }
                    } ?>
                  </ul>
    <!----> </li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">
  

<div class="container">

<!------------------------------------------------->
<!-- dado normal --> 
  
  <!--Boton lanzar dado normal -->
  
  <table width=100%>
  <form method="post">  
  <tr>
     <td>
         <font size="4">Dado 1:</font><br/>
         <?php echo lanzarDado() ?><br/>
     </td>
   <td>
       <font size="4">Dado 2:</font><br/>
        <?php echo lanzarDado() ?><br/>
        </td>
   <td>
        <label>Dado 1</label>
      <input type="text" class="form-control" >
      
      <!-- radio -->
        <div class="radio">
              <label>
                <input type="radio" name="opciones" id="opciones_1" value="+" checked>
                +
              </label>
              <label>
                <input type="radio" name="opciones" id="opciones_2" value="-">
               -
              </label>
              
        </div>
       <!-- -->
        <label>Dado 2</label>
      <input type="text" class="form-control" >
       <br/>
       <button type="submit" class="btn btn-default">Submit</button>
       
       
       
        <!-- Pruebas, pasar informacion a resultado -->
        
        <a href="resultado.php?nombre=Jonathan">Link resultado</a>
        
        
        <!-- -->
        
        
        
   </td>  
        
        
    </tr>
    
      
  </form> 
</table>



</div>

</body>
</html>