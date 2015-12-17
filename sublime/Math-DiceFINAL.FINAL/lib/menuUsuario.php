
    <div class="container" style="margin-left: 10px"><!-- pequeño menu de usuario que se muestra en juego -->
        <form class="formularioUser">
                <img src="img/player1.png" width="35" height="35" align="left"/>
                <b>Usuario:</b> <?php echo "".$jugador1->getNombre()." ".$jugador1->getApellidos(); ?>
                <br/>  <br/> 
                 <img src="img/calendar.png" width="35" height="35" align="left"/>
                 <b>Edad:<b></b> <?php echo " ".$jugador1->getEdad(); ?>
                <br/>  <br/>
               <b> Tipo de juego:</b> <?php echo " ".$jugador1->getTipo(); ?>
                <br/>   <br/>
                
            <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">Salir</button> 
        </form>
    </div>

