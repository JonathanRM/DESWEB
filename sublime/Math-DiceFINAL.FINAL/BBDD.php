<?php 

    $conexion=new mysqli("localhost","jonathanr4m","","usuarios");
    $query = 'SELECT * FROM usuario.usuarios where nombre="'.$_POST['nombre'].'"';
    $resultado=$conexion->query($query);
    $datos_user_db=[];
    if (mysqli_num_rows($resultado) != 0){
    
    while ($rows = $resultado->fetch_assoc()) {
        $rows["id"]; $datos_user_db[0]=$rows["id"];
        $rows["nombre"]; $datos_user_db[1]=$rows["nombre"];
        $rows["apellidos"]; $datos_user_db[2]=$rows["apellidos"];
        $rows["edad"]; $datos_user_db[3]=$rows["edad"];
        //echo $datos_user_db[1];
        }
       
    } else {
        
        $query_auser="INSERT INTO usuario.usuarios (nombre, apellidos, edad) VALUES ('".$_POST['nombre']."', '".$_POST['apellidos']."', '".$_POST['edad']."')";
        $conexion->query($query_auser);
        $query = 'SELECT * FROM usuario where nombre="'.$_POST['nombre'].'"';
        $resultado=$conexion->query($query);
    while ($rows = $resultado->fetch_assoc()) {
        $rows["id"]; $datos_user_db[0]=$rows["id"];
        $rows["nombre"]; $datos_user_db[1]=$rows["nombre"];
        $rows["apellidos"]; $datos_user_db[2]=$rows["apellidos"];
        $rows["edad"]; $datos_user_db[3]=$rows["edad"];
        }
    }
    
        $resultado->free();

//-------------------------------------------------------------------------------
function mostrar_db2(){
    $server="localhost";
    $db="usuarios";
    $user="jonathanr4m";
    $pass="";
    $conexion=new mysqli($server,$user,$pass,$db);
   /*   COMPROBAR SI SE CONECTA A LA BBDD
    if($conexion->connect_errno){
        echo "Error al conectar";
    } else {
        echo "Conectado";
    }
    */
    
    $query = "SELECT * FROM usuario";
    $resultado=$conexion->query($query);
    print("<table border='1'>");
    print("<tr align='center'>");
    print("<th>ID</th>");
    print("<th>NOMBRE</th>");
    print("<th>APELLIDO</th>");
    print("<th>EDAD</th>");
    print("</tr>");
    while ($rows = $resultado->fetch_assoc()) {
        print("<tr align='center'>"); 
        print("<td>".$rows["id"] );
        print("<td>".$rows["nombre"] );
        print("<td>".$rows["apellidos"] );
        print("<td>".$rows["edad"] );
        print("</tr>");
        }
        print("</table>");
    $resultado->free();
    
} 


