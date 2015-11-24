<?php
include('lib/Jugador.php'); // autentificacion

session_start(); // inicio sesion

if(isset($_POST['jugador'])){ // comprobar objeto jugador
    if (!isset($_SESSION['jugador'])) {
        $jugador1 = new Jugador($_POST['nombre'],$_POST['apellidos'],$_POST['edad'],$_POST['tipoJuego']); // crear objeto jugador
        
        $_SESSION['jugador'] = $jugador1; // iniciamos jugador
    }
}else{
    
    if(isset($_SESSION['jugador'])){ 
        $jugador1 = $_SESSION['jugador']; // iniciamos jugador
        
    }else{
        header('Location: index.php');
    }
}
?>