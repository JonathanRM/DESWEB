<?php

 class BaseDatos{ // conexion a la base de datos
     private $host="localhost";
     private $db="usuarios";
     private $user="jonathanr4m";
     private $pass="";
     private $conexion;
     
     
     // Constructor
     function __construct(){
         $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db);
         
     }
     
     function comprobarConexion(){
         if($this->conexion->connect_errno){
             echo "Fallo al conectar a MySQL: (" . $this ->conexion->connect_errno . ") " . $this->conexion->connect_error;
             
         }
     }
 }


?>