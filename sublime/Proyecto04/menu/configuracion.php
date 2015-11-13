<?php

//Array multilenguaje			// MENU en PHP // Jonathan
$lang="sp";

$menu=array(
	"titulo"=>array(
		"sp"=>"<img src='../dado/imgs/logo1.png'>",
		"en"=>"<img src='../dado/imgs/logo1.png'>"
	    ),
	"portada"=>array(
		"sp"=>"Inicio",
		"en"=>"Home"
		),
	"instrucciones"=>array(
		"sp"=>"Instrucciones",
		"en"=>"Instructions"
		),
	"tiposJuego"=>array(
		"sp"=>"Tipos de juego",
		"en"=>"Game choice",
		"submenu"=>array(
			"tipo1"=>array(
				"sp"=>"Junior",
				"en"=>"Junior",
			),
			"tipo2"=>array(
				"sp"=>"Junior+",
				"en"=>"Junior+",
				),
		
			)
		)
	)

?>		





				<!-- BOOTSTRAP HTML -->
<!DOCTYPE html>
<html lang="sp">
<body>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php echo $menu['titulo'][$lang]?></a>  <!-- Mostrar titulo de php -->
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"><?php echo $menu['portada'][$lang]?></a></li><!-- Mostrar inicio de php -->
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
        <li><a href="instrucciones.php"><?php echo $menu['instrucciones'][$lang]?></a></li>
      
    </li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">
  

<div class="container">




</div>

</body>
</html>