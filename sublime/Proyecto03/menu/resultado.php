<?php
    if(isset($_GET["operacion"])){  // isset: Determina si una variable está definida y no es NULL
        $operacion=$_GET["operacion"];
        print($operacion);
        
    }else{
        $operacion="No hay nada definido";
        print($operacion);
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