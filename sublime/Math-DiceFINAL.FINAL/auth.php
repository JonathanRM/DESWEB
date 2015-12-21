<?php
include('lib/Jugador.php'); // autentificacion
//include('./BBDD.php');
session_start(); // inicio sesion

if(isset($_POST['jugador'])){ // comprobar objeto jugador
    if (!isset($_SESSION['jugador'])) {                   //mostrar datos en menuUsuario, recoge los datos de la base de datos
        
       //$jugador1 = new Jugador($_POST['nombre'],$_POST['apellidos'],$_POST['edad'],$_POST['tipoJuego']); // crear objeto jugador
       $jugador1 = new Jugador($datos_user_db[1],$datos_user_db[2],$datos_user_db[3],$_POST['tipoJuego']); // crear objeto jugador
        
        $_SESSION['jugador'] = $jugador1; // iniciamos jugador
    }
}else{
    
    if(isset($_SESSION['jugador'])){ 
        $jugador1 = $_SESSION['jugador']; // iniciamos jugador
        
         $jugador1 -> setNombre($_POST['nombre']);
         $jugador1 -> setApellidos($_POST['apellidos']);
         $jugador1 -> setEdad($_POST['edad']);
        
    }else{
        header('Location: index.php');
    }
}
?>