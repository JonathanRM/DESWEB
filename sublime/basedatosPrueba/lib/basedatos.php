<?php
             // datos conexion base de datos
 class BaseDatos{
     private $host="localhost";
     private $db="usuarios";
     private $user="jonathanr4m";
     private $pass="";
     private $conexion;
     
     
     // Constructor
     function __construct(){ // objeto que se le pasa los datos conexion base de datos
         $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db);
         
     }
     
     function comprobarConexion(){
         if($this->conexion->connect_errno){
             echo "Fallo al conectar a MySQL: (" . $this ->conexion->connect_errno . ") " . $this->conexion->connect_error;
             
         }
     }
     
     /*
     function usuariosHTML(){
       $resultadohtml=<<<EOF
       <table class="table table-striped">
       <thead>
          <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Sexo</th>
          </tr>
        </thead>
        <tbody>
        EOF;
            // Realizamos la consulta
            $consulta ="SELECT * FROM usuario";
            
            if($resultado  = $this->conexion->query($consulta)){
             /* obtener un array asociativo 
            while ($fila = $resultado->fetch_assoc()){
             $resultadohtml=$resultadohtml."<tr>";
             $resultadohtml=$resultadohtml."<td>";
             $resultadohtml=$resultadohtml.$fila["id"];
             $resultadohtml=$resultadohtml."</td>";
             $resultadohtml=$resultadohtml."<td>";
             $resultadohtml=$resultadohtml.$fila["nombre"];
                $resultadohtml=$resultadohtml."</td>";
                      $resultadohtml=$resultadohtml."<td>";
             $resultadohtml=$resultadohtml.$fila["apellidos"];
                $resultadohtml=$resultadohtml."</td>";
                $resultadohtml=$resultadohtml."<td>";
             $resultadohtml=$resultadohtml.$fila["edad"];
                $resultadohtml=$resultadohtml."</td>";
                 $resultadohtml=$resultadohtml."<td>";
             $resultadohtml=$resultadohtml.$fila["sexo"];
                $resultadohtml=$resultadohtml."</td>";
                $resultadohtml=$resultadohtml."</tr>";
            }
            $resultadohtml=$resultadohtml."</tbody></table>";
            
            // liberar el conjunto de resultados
            $resultado->free();
            }
            return $resultadohtml;
            }
        */
     }
     



?>