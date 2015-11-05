<?php
    include('Jugador');
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
        $jugador1 = new Jugador();
        $jugador2 = new Jugador();
        
        $jugador1->setNombre("Paco");
        $jugador1->setNombre("Pepe");
        
        $jugador1->mostrarNombre();
        $jugador2->mostrarNombre();
        ?>
    </body>
</html>