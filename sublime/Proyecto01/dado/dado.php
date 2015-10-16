
<?php
/* Dado random, numero aleatorio que genera imagen del dado */

    function lanzarDado(){
        $numero = rand(1,6);
        
        
        switch($numero){
            case 0:
                
            break;
            
            case 1:
               echo "<img src='imgs/1.png' >";
            break;
            
            case 2:
               echo "<img src='imgs/2.png' >";
            break;
            
            case 3:
               echo "<img src='imgs/3.png' >";
            break;
            
            case 4:
               echo "<img src='imgs/4.png' >";
            break;
            
             case 5:
               echo "<img src='imgs/5.png' >";
            break;
            
            case 6:
               echo "<img src='imgs/6.png' >";
            break;
            
         }
      }
        
        return lanzarDado();
    
?>

