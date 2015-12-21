<?php 

    $conexion=new mysqli("localhost","jonathanr4m","","usuarios");   // conexion a la base de datos
    $query = 'SELECT * FROM usuarios.usuario where nombre="'.$_POST['nombre'].'"'; // (nombre es la clave) si esta el nombre introducido sigue adelante y no inserta ni nada
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
       
    } else { //sino esta el nombre introducido arriba, inserta el usuario, apellidos y edad
        
        $query_auser="INSERT INTO usuarios.usuario (nombre, apellidos, edad) VALUES ('".$_POST['nombre']."', '".$_POST['apellidos']."', '".$_POST['edad']."')";
        $conexion->query($query_auser);
        $query = 'SELECT * FROM usuarios.usuario where nombre="'.$_POST['nombre'].'"';
        $resultado=$conexion->query($query);
    while ($rows = $resultado->fetch_assoc()) {
        $rows["id"]; $datos_user_db[0]=$rows["id"];
        $rows["nombre"]; $datos_user_db[1]=$rows["nombre"];
        $rows["apellidos"]; $datos_user_db[2]=$rows["apellidos"];
        $rows["edad"]; $datos_user_db[3]=$rows["edad"];
        }
    }
    
        $resultado->free();



function mostrar_db2(){ //mostrar en una tabla la base de datos
    $server="localhost";
    $db="usuarios";
    $user="jonathanr4m";
    $pass="";
    $conexion=new mysqli($server,$user,$pass,$db);
    
    $query = "SELECT * FROM usuarios.usuario";
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


