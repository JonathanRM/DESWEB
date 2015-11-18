<form class="formularioUser">
<div class="container">
    
            Usuario: <?php echo "".$jugador1->getNombre()." ".$jugador1->getApellidos(); ?>
            <br /><br />
            Tipo de juego: <?php echo " ".$jugador1->getTipo(); ?>
            <br /><br />
            Edad: <?php echo " ".$jugador1->getEdad(); ?>
            <br /> <br />
            
        <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">Salir</button> 
    
</div>
</form>
