
<?php   

// Comprueba el lenguaje (no implementado en ningun sitio aun)
if ( ($_GET['$lang'] == null)||(strlen($_GET['$lang'])==0)){
    $lang="sp";
}else{
    $lang=$_GET['$lang'];
}


$menu=array( // menú
    "titulo"=>array(
        "sp"=>"<img src='img/logo1.png'>",
        "en"=>"<img src='img/logo1.png'>"
        ),
    "portada"=>array(
        "sp"=>"Inicio",
        "en"=>"Home"
        ),
    "tiposJuego"=>array(
        "sp"=>"Tipos de juego",
        "en"=>"Game modes",
        "submenu"=>array(
            "tipo1"=>array(
                "sp"=>"Junior",
                "en"=>"Junior"
                ),
            "tipo2"=>array(
                "sp"=>"Junior +",
                "en"=>"Junior +"
                ),
            )
        ),
    "instrucciones"=>array(
        "sp"=>"Instrucciones",
        "en"=>"Instructions"
        ),
    "contacto"=>array(
        "sp"=>"Contacto",
        "en"=>"Contact"
        ),
        "perfil"=>array(
        "sp"=>"Perfil",
        "en"=>"Profile"
        ),
    );
?>
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php"><?php echo $menu['titulo'][$lang]?> </a>
            </div>
            <div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="juego.php"><?php echo $menu['portada'][$lang]?></a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $menu['tiposJuego'][$lang]?> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      
                      
                      
                           <!-- For each de tipos de juego -->
                    <?php 
                    foreach( $menu['tiposJuego'] as $clave => $valor ){ // Las claves de tipos de juego las guarda en valor
                        
                       
                        if($clave == 'submenu'){ // Si la clave es igual a submenu entrará y ...
                            
                            /// Los valores los mostrará en juegos
                        foreach ($valor as $tiposJu){ ?>
                            <li><a href="#"><?php echo $tiposJu[$lang] ?></a></li>
                    <?php } ?>
                    <?php }
                    }?>
                  </ul>
                </li>
                <li><a href="instrucciones.php"><?php echo $menu['instrucciones'][$lang]?></a></li>
                <li><a href="#"><?php echo $menu['contacto'][$lang]?></a></li>
                <li><a href="perfil.php"><?php echo $menu['perfil'][$lang]?></a></li>
              </ul>
            </div>
          </div>
        </nav>
