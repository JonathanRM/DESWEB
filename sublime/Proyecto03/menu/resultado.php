

<?php
    if(isset($_GET["valor1oculto"])){  // isset: Determina si una variable está definida y no es NULL
        $valor1oculto=$_GET["valor1oculto"];
        $valor2oculto=$_GET["valor2oculto"];
        $operacion=$_GET["operacion"];
        $dado1=$_GET["dado1"];
        $dado2=$_GET["dado2"];
        $resultado=$dado1+$dado2;
        
        
        if($dado1==$valor1oculto && $dado2==$valor2oculto){
            
            if($operacion=="+"){
                $resultado=$dado1+$dado2;
                print("Resultado: " .$dado1." ".$operacion." ".$dado2." = ".$resultado);
            }else{
                $resultado=($dado1-$dado2)*-1;
                print("Operacion: " .$dado1." ".$operacion." ".$dado2." = ".$resultado);
            }
          
        }else{
            print("Error");
              }
    
    }
?>




<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    </body>
</html>