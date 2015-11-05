<?php
class Jugador{
    
  // PROPIEDADES
  // Declaracion de una propiedad
  public $nombre ="Jugador 1"; // Le damos un valor predeterminado 
  
  // CREAMOS EL CONSTRUCTOR
  function __construct(){
       echo "El jugador se llama: " .$this->nombre;
  }
  
  // METODOS
  // Declaración de un método
  public function getNombre(){
      return $this->nombre;
  }
  
  // Funcion para cambiar el nombre de una propiedad
  public function setNombre($nombre){
      $this->nombre=$nombre;
  }
    
    
}
?>