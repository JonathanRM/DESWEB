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
          
          
    <!-- For each de ayuda, probando mas ejemplos -->
      
             <?php 
                    foreach( $menu['ayuda'] as $clave => $valor ){ // Las claves de ayuda las guarda en valor
                      
                      if($clave == 'submenu2'){  // Si la clave es igual a submenu entrará y ...
                         
                        foreach ($valor as $ayuda){    // Los valores los mostrará en ayuda?>   
                            <li><a href="#"><?php echo $ayuda[$lang] ?></a></li>
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
<!-- dado normal --> <font size="6"><i>Dado 6 caras</i></font><br/>
  <div class="row">
       <div class="col-sm-2"><img src="../dado/imgs/1.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/2.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/3.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/4.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/5.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/6.png"></div>
  </div>
  
  <br><br>
  
  <!--Boton lanzar dado normal -->
  <form method="post">  
     <font size="4">Dado aleatorio:</font><br/>
       <?php echo lanzarDado() ?><br/><br/>
      <input type="submit" class="btn btn-success" value="Lanzar dado"/>
  </form> 

<br><br><br><br>
<!-- -------------------------------------------------->

        <!-- Dado dodecaedro -->
 <div class="row"> <font size="6"><i>Dado dodecaedro</i></font><br/>
       <div class="col-sm-2"><img src="../dado/imgs/dodecaedro/1.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/dodecaedro/2.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/dodecaedro/3.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/dodecaedro/4.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/dodecaedro/5.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/dodecaedro/6.png"></div>
       <div class="col-sm-2">.</div>
       <div class="col-sm-2"><img src="../dado/imgs/dodecaedro/7.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/dodecaedro/8.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/dodecaedro/9.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/dodecaedro/10.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/dodecaedro/11.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/dodecaedro/12.png"></div>
  </div>
  
  <br><br>
  
  <!--Boton lanzar dado  -->
  <form method="post">  
     <font size="4">Dado aleatorio:</font><br/>
       <?php echo lanzarDadoDodecaedro() ?><br/><br/>
      <input type="submit" class="btn btn-success" value="Lanzar dado"/>
  </form> 
<br><br><br><br>
<!-- -------------------------------------------->



<!-- dado normal 3 caras -->
  <div class="row"> <font size="6"><i>Dado 3 caras</i></font><br/>
       <div class="col-sm-2"><img src="../dado/imgs/1.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/2.png"></div>
       <div class="col-sm-2"><img src="../dado/imgs/3.png"></div>

  </div>
  
  <br><br>
  
  <!--Boton lanzar dado -->
  <form method="post">  
     <font size="4">Dado aleatorio:</font><br/>
       <?php echo lanzarDado3() ?>
        <?php echo lanzarDado3() ?><br/><br/>
      <input type="submit" class="btn btn-success" value="Lanzar dado"/>
  </form> 
 
<!-- -------------------------------------------->

</div>

</body>
</html>