<?php
include('lib/Jugador.php'); // autentificacion
session_start();

if(isset($_POST['jugador'])){
    if (!isset($_SESSION['jugador'])) {
        $jugador1 = new Jugador($_POST['nombre'],$_POST['apellidos'],$_POST['edad'],$_POST['tipoJuego']);
        
        $_SESSION['jugador'] = $jugador1;
     
    }

}else{
    
    if(isset($_SESSION['jugador'])){
        $jugador1 = $_SESSION['jugador'];
        
    }else{
        header('Location: index.php');
    }
}
?>