
<?php
/* Dado random, numero aleatorio que genera imagen del dado */

    function lanzarDado(){
        $numero = rand(1,6);
         
               echo "<img src='../dado/imgs/$numero.png'>";
            
            
         }
         
        
?>

