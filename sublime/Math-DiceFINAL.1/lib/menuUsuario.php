
    <div class="container" style="margin-left: 350px">
        <form class="formularioUser">
                <img src="img/player1.png" width="35" height="35" align="left"/>
                Usuario: <?php echo "".$jugador1->getNombre()." ".$jugador1->getApellidos(); ?>
                <br/>  <br/> 
                 <img src="img/calendar.png" width="35" height="35" align="left"/>
                 Edad: <?php echo " ".$jugador1->getEdad(); ?>
                <br/>  <br/>
                Tipo de juego: <?php echo " ".$jugador1->getTipo(); ?>
                <br/>   <br/>
                
            <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">Salir</button> 
        </form>
    </div>

