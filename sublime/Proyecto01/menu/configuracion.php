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

  <div class="row">
       <div class="col-sm-2"><img src="../dado/imgs/1.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/2.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/3.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/4.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/5.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/6.png"></div>
  </div>
  
  <br><br><br><br>
  
  <!--Boton lanzar dado -->
  <form method="post">  
       <?php echo lanzarDado() ?><br/>
      <input type="submit" class="btn btn-success" value="Lanzar dado"/>
  </form> 

 


</div>

</body>
</html>