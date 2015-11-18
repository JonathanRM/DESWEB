<?php

class Jugador{
    
    // Constr
    
    function Jugador($nombre, $apellidos, $edad){
        
        $this->$nombre = $nombre;
        $this->$apellidos = $apellidos;
        $this->$edad = $edad;
        
    }
    
    // Getts
    
    function getNombre(){
        return $this->$nombre;
    }
    
    function getApellidos(){
        return $this->$apellidos;
    }
    
    function getEdad(){
        return $this->$edad;
    }
    
    // Setts
    
    function setNombre($nombre){
        $this->$nombre = $nombre;
    }
    
    function setApellidos($apellidos){
        $this->$apellidos = $apellidos;
    }
    
    function setEdad($edad){
        $this->$edad = $edad;
    }
    
    // Functions
    
    
}


?>