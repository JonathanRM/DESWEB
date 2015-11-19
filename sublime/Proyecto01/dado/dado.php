
<?php
/* Dado random, numero aleatorio que genera imagen del dado */

    function lanzarDado(){
        $numero = rand(1,6);
        
        switch($numero){
            case 0:
                
            break;
            
            case 1:
               echo "<img src='../dado/imgs/1.png' >";
            break;
            
            case 2:
               echo "<img src='../dado/imgs/2.png' >";
            break;
            
            case 3:
               echo "<img src='../dado/imgs/3.png' >";
            break;
            
            case 4:
               echo "<img src='../dado/imgs/4.png' >";
            break;
            
             case 5:
               echo "<img src='../dado/imgs/5.png' >";
            break;
            
            case 6:
               echo "<img src='../dado/imgs/6.png' >";
            break;
            
         }
         
      }
      
       function lanzarDadoDodecaedro(){
        $numero = rand(1,12);
        
        
        switch($numero){
            case 0:
                
            break;
            
            case 1:
               echo "<img src='../dado/imgs/dodecaedro/1.png' >";
            break;
            
            case 2:
               echo "<img src='../dado/imgs/dodecaedro/2.png' >";
            break;
            
            case 3:
               echo "<img src='../dado/imgs/dodecaedro/3.png' >";
            break;
            
            case 4:
               echo "<img src='../dado/imgs/dodecaedro/4.png' >";
            break;
            
             case 5:
               echo "<img src='../dado/imgs/dodecaedro/5.png' >";
            break;
            
            case 6:
               echo "<img src='../dado/imgs/dodecaedro/6.png' >";
            break;
            
            case 7:
               echo "<img src='../dado/imgs/dodecaedro/7.png' >";
            break;
              
             case 8:
               echo "<img src='../dado/imgs/dodecaedro/8.png' >";
            break;
            
            case 9:
               echo "<img src='../dado/imgs/dodecaedro/9.png' >";
            break;
            
            case 10:
               echo "<img src='../dado/imgs/dodecaedro/10.png' >";
            break;
            
             case 11:
               echo "<img src='../dado/imgs/dodecaedro/11.png' >";
            break;
            
             case 12:
               echo "<img src='../dado/imgs/dodecaedro/12.png' >";
            break;
            
         }
         
      }
      
        function lanzarDado3(){
        $numero = rand(1,3);
        
        
        switch($numero){
            case 0:
                
            break;
            
            case 1:
               echo "<img src='../dado/imgs/1.png' >";
            break;
            
            case 2:
               echo "<img src='../dado/imgs/2.png' >";
            break;
            
            case 3:
               echo "<img src='../dado/imgs/3.png' >";
            break;
           
         }
         
      }
        
    
?>

