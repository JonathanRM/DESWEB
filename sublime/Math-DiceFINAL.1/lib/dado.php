<?php

    function dado5caras($num){
        $arr1=array(
            'dado1.png','dado2.png','dado3.png','dado4.png','dado5.png','dado6.png'
            );
        
        $numAleatorio = rand(0,5);
        $numAleatorioMas1 = $numAleatorio+1;
            
        echo '<div class="col-xs-2"><img class="dado" src="img/'.$arr1[$numAleatorio].'"></img></div>';
       
        echo '<input type="hidden" name="dado'.$num.'" value="'.$numAleatorioMas1.'">';
        
    }
    
    
     function dado12caras($num){
        $arr1=array(
            'Dodecaedro1.png','Dodecaedro2.png','Dodecaedro3.png','Dodecaedro4.png','Dodecaedro5.png','Dodecaedro6.png','Dodecaedro7.png','Dodecaedro8.png','Dodecaedro9.png','Dodecaedro10.png','Dodecaedro11.png','Dodecaedro12.png',
            );
        
        $numAleatorio = rand(0,11);
        $numAleatorioMas1 = $numAleatorio+1;
            
        echo '<div class="col-xs-3"><img class="dado" src="img/'.$arr1[$numAleatorio].'"></img></div>';
       
        echo '<input type="hidden" name="dodecaedro'.$num.'" value="'.$numAleatorioMas1.'">';
        
    }
    
    
    function dado3caras($num){
        $arr1=array(
            'dado1.png','dado2.png','dado3.png'
            );
        
        $numAleatorio = rand(0,2);
        $numAleatorioMas1 = $numAleatorio+1;
            
        echo '<div class="col-xs-2"><img class="dado" src="img/'.$arr1[$numAleatorio].'"></img></div>';
       
        echo '<input type="hidden" name="dado'.$num.'" value="'.$numAleatorioMas1.'">';
        
    }
    
    
    function compruebaPosicionDadoConNumero($dado1, $dado2, $dado3, $dado4, $dado5, $dado6, $dado7, $eligeDado1, $eligeDado2, $signo, $num1, $num2){ 
    
        
        if($dado1 == $eligeDado1 && $dado1 == $eligeDado2 || $dado1 == $eligeDado1 && $dado2 == $eligeDado2 || $dado1 == $eligeDado1 && $dado3 == $eligeDado2 
        || $dado1 == $eligeDado1 && $dado4 == $eligeDado2  || $dado1 == $eligeDado1 && $dado5 == $eligeDado2 || $dado1 == $eligeDado1 && $dado6 == $eligeDado2 || $dado1 == $eligeDado1 && $dado7 == $eligeDado2){
             if($signo == "+"){
                $suma = $num1 + $num2;
                return "Correcto, la suma de ".$num1." + ".$num2." es: ".$suma;
                
            }else if($signo == "-"){
                $resta = $num1 - $num2;
                return "Correcto, la resta de ".$num1." - ".$num2." es: ".$resta;
            }
        }
        
       if($dado2 == $eligeDado1 && $dado1 == $eligeDado2 || $dado2 == $eligeDado1 && $dado2 == $eligeDado2 || $dado2 == $eligeDado1 && $dado3 == $eligeDado2 
        || $dado1 == $eligeDado1 && $dado4 == $eligeDado2  || $dado2 == $eligeDado1 && $dado5 == $eligeDado2 || $dado2 == $eligeDado1 && $dado6 == $eligeDado2 || $dado2 == $eligeDado1 && $dado7 == $eligeDado2){
             if($signo == "+"){
                $suma = $num1 + $num2;
                return "Correcto, la suma de ".$num1." + ".$num2." es: ".$suma;
                
            }else if($signo == "-"){
                $resta = $num1 - $num2;
                return "Correcto, la resta de ".$num1." - ".$num2." es: ".$resta;
            }
        } 
        
        if($dado3 == $eligeDado1 && $dado1 == $eligeDado2 || $dado3 == $eligeDado1 && $dado2 == $eligeDado2 || $dado3 == $eligeDado1 && $dado3 == $eligeDado2 
        || $dado3 == $eligeDado1 && $dado4 == $eligeDado2  || $dado3 == $eligeDado1 && $dado5 == $eligeDado2 || $dado3 == $eligeDado1 && $dado6 == $eligeDado2 || $dado3 == $eligeDado1 && $dado7 == $eligeDado2){
             if($signo == "+"){
                $suma = $num1 + $num2;
                return "Correcto, la suma de ".$num1." + ".$num2." es: ".$suma;
                
            }else if($signo == "-"){
                $resta = $num1 - $num2;
                return "Correcto, la resta de ".$num1." - ".$num2." es: ".$resta;
            }
        } 
        
         if($dado4 == $eligeDado1 && $dado1 == $eligeDado2 || $dado4 == $eligeDado1 && $dado2 == $eligeDado2 || $dado4 == $eligeDado1 && $dado3 == $eligeDado2 
        || $dado4 == $eligeDado1 && $dado4 == $eligeDado2  || $dado4 == $eligeDado1 && $dado5 == $eligeDado2 || $dado4 == $eligeDado1 && $dado6 == $eligeDado2 || $dado4 == $eligeDado1 && $dado7 == $eligeDado2){
             if($signo == "+"){
                $suma = $num1 + $num2;
                return "Correcto, la suma de ".$num1." + ".$num2." es: ".$suma;
                
            }else if($signo == "-"){
                $resta = $num1 - $num2;
                return "Correcto, la resta de ".$num1." - ".$num2." es: ".$resta;
            }
        } 
        
          if($dado5 == $eligeDado1 && $dado1 == $eligeDado2 || $dado5 == $eligeDado1 && $dado2 == $eligeDado2 || $dado5 == $eligeDado1 && $dado3 == $eligeDado2 
        || $dado5 == $eligeDado1 && $dado4 == $eligeDado2  || $dado5 == $eligeDado1 && $dado5 == $eligeDado2 || $dado5 == $eligeDado1 && $dado6 == $eligeDado2 || $dado5 == $eligeDado1 && $dado7 == $eligeDado2){
             if($signo == "+"){
                $suma = $num1 + $num2;
                return "Correcto, la suma de ".$num1." + ".$num2." es: ".$suma;
                
            }else if($signo == "-"){
                $resta = $num1 - $num2;
                return "Correcto, la resta de ".$num1." - ".$num2." es: ".$resta;
            }
        } 
        
         if($dado6 == $eligeDado1 && $dado1 == $eligeDado2 || $dado6 == $eligeDado1 && $dado2 == $eligeDado2 || $dado6 == $eligeDado1 && $dado3 == $eligeDado2 
        || $dado6 == $eligeDado1 && $dado4 == $eligeDado2  || $dado6 == $eligeDado1 && $dado5 == $eligeDado2 || $dado6 == $eligeDado1 && $dado6 == $eligeDado2 || $dado6 == $eligeDado1 && $dado7 == $eligeDado2){
             if($signo == "+"){
                $suma = $num1 + $num2;
                return "Correcto, la suma de ".$num1." + ".$num2." es: ".$suma;
                
            }else if($signo == "-"){
                $resta = $num1 - $num2;
                return "Correcto, la resta de ".$num1." - ".$num2." es: ".$resta;
            }
        } 
        
       
        
        //
        
        if($dado1 == $eligeDado1 && $dado1 == $eligeDado2 || $dado2 == $eligeDado1 && $dado1 == $eligeDado2 || $dado3 == $eligeDado1 && $dado1 == $eligeDado2 
        || $dado4 == $eligeDado1 && $dado1 == $eligeDado2  || $dado5 == $eligeDado1 && $dado1 == $eligeDado2 || $dado6 == $eligeDado1 && $dado1 == $eligeDado2 || $dado7 == $eligeDado1 && $dado1 == $eligeDado2){
            if($signo == "+"){
                $suma = $num1 + $num2;
                return "Correcto, la suma de ".$num1." + ".$num2." es: ".$suma;
                
            }else if($signo == "-"){
                $resta = $num1 - $num2;
                return "Correcto, la resta de ".$num1." - ".$num2." es: ".$resta;
            } 
        }
        
         if($dado1 == $eligeDado1 && $dado2 == $eligeDado2 || $dado2 == $eligeDado1 && $dado2 == $eligeDado2 || $dado3 == $eligeDado1 && $dado2 == $eligeDado2 
        || $dado4 == $eligeDado1 && $dado2 == $eligeDado2  || $dado5 == $eligeDado1 && $dado2 == $eligeDado2 || $dado6 == $eligeDado1 && $dado2 == $eligeDado2 || $dado7 == $eligeDado1 && $dado2 == $eligeDado2){
             if($signo == "+"){
                $suma = $num1 + $num2;
                return "Correcto, la suma de ".$num1." + ".$num2." es: ".$suma;
                
            }else if($signo == "-"){
                $resta = $num1 - $num2;
                return "Correcto, la resta de ".$num1." - ".$num2." es: ".$resta;
            }
        }
        
         if($dado1 == $eligeDado1 && $dado3 == $eligeDado2 || $dado2 == $eligeDado1 && $dado3 == $eligeDado2 || $dado3 == $eligeDado1 && $dado3 == $eligeDado2 
        || $dado4 == $eligeDado1 && $dado3 == $eligeDado2  || $dado5 == $eligeDado1 && $dado3 == $eligeDado2 || $dado6 == $eligeDado1 && $dado3 == $eligeDado2 || $dado7 == $eligeDado1 && $dado3 == $eligeDado2){
             if($signo == "+"){
                $suma = $num1 + $num2;
                return "Correcto, la suma de ".$num1." + ".$num2." es: ".$suma;
                
            }else if($signo == "-"){
                $resta = $num1 - $num2;
                return "Correcto, la resta de ".$num1." - ".$num2." es: ".$resta;
            }
        }
        
         if($dado1 == $eligeDado1 && $dado4 == $eligeDado2 || $dado2 == $eligeDado1 && $dado4 == $eligeDado2 || $dado3 == $eligeDado1 && $dado4 == $eligeDado2 
        || $dado4 == $eligeDado1 && $dado4 == $eligeDado2  || $dado5 == $eligeDado1 && $dado4 == $eligeDado2 || $dado6 == $eligeDado1 && $dado4 == $eligeDado2 || $dado7 == $eligeDado1 && $dado4 == $eligeDado2){
             if($signo == "+"){
                $suma = $num1 + $num2;
                return "Correcto, la suma de ".$num1." + ".$num2." es: ".$suma;
                
            }else if($signo == "-"){
                $resta = $num1 - $num2;
                return "Correcto, la resta de ".$num1." - ".$num2." es: ".$resta;
            }
        }
        
        if($dado1 == $eligeDado1 && $dado5 == $eligeDado2 || $dado2 == $eligeDado1 && $dado5 == $eligeDado2 || $dado3 == $eligeDado1 && $dado5 == $eligeDado2 
        || $dado4 == $eligeDado1 && $dado5 == $eligeDado2  || $dado5 == $eligeDado1 && $dado5 == $eligeDado2 || $dado6 == $eligeDado1 && $dado5 == $eligeDado2 || $dado7 == $eligeDado1 && $dado5 == $eligeDado2){
             if($signo == "+"){
                $suma = $num1 + $num2;
                return "Correcto, la suma de ".$num1." + ".$num2." es: ".$suma;
                
            }else if($signo == "-"){
                $resta = $num1 - $num2;
                return "Correcto, la resta de ".$num1." - ".$num2." es: ".$resta;
            }
        }
        
         if($dado1 == $eligeDado1 && $dado6 == $eligeDado2 || $dado2 == $eligeDado1 && $dado6 == $eligeDado2 || $dado3 == $eligeDado1 && $dado6 == $eligeDado2 
        || $dado4 == $eligeDado1 && $dado6 == $eligeDado2  || $dado5 == $eligeDado1 && $dado6 == $eligeDado2 || $dado6 == $eligeDado1 && $dado6 == $eligeDado2 || $dado7 == $eligeDado1 && $dado6 == $eligeDado2){
             if($signo == "+"){
                $suma = $num1 + $num2;
                return "Correcto, la suma de ".$num1." + ".$num2." es: ".$suma;
                
            }else if($signo == "-"){
                $resta = $num1 - $num2;
                return "Correcto, la resta de ".$num1." - ".$num2." es: ".$resta;
            }
        }
        
        
    
    }
    
    
    
    function compruebaDado($dado1, $dado2, $num1, $signo ,$num2){ 
        // comprueba si los valores de los dados introducidos corresponden con al dado seleccionado (por defecto los 2 ultimos)
        if($dado1 == $num1 && $dado2 == $num2){
        
            if($signo == "+"){
                $suma = $num1 + $num2;
                return "Correcto, la suma de ".$num1." + ".$num2." es: ".$suma;
                
            }else if($signo == "-"){
                $resta = $num1 - $num2;
                return "Correcto, la resta de ".$num1." - ".$num2." es: ".$resta;
            }
        }else{
            return "Error, el dado1 o el dado 2 no son correctos.";
            
        }
        
    }
?>