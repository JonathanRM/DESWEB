<?php

class Jugador{ // clase para crear objeto Jugador cuando se necesite
   
    private $nombre;
    private $apellidos;
    private $edad;
    
   
    public function Jugador($nombre, $apellidos, $edad, $tipo){
        $this->nombre = $nombre;
         $this->apellidos = $apellidos;
         $this->edad = $edad;
         $this->tipo = $tipo;
        
    }
    
    
            public function getNombre(){
                return $this->nombre;
            }
            
            public function getApellidos(){
                return $this->apellidos;
            }
            
            public function getEdad(){
                return $this->edad;
            }
            
            public function getTipo(){
                return $this->tipo;
            }
            
            
            
            
            public function setNombre($nombre1){
                $nombre = $nombre1;
            }
            
            public function setApellidos($apellidos1){
                $apellidos = $apellidos1;
            }
            
            public function setEdad($edad1){
                $edad = $edad1;
            }
            
            public function setTipo($tipo1){
                $tipo = $tipo;
            }
            
            
}


?>