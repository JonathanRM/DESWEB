<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php 
        /*
        $consulta = "SELECT * FROM usuario"; //Almacena la consulta
        $enlace = mysql_connect('localhost', 'raulcompanybravo', '') or
        die('No pudo conectarse: ' . mysql_error());;
        $bd = mysql_select_db("usuarios", $enlace) or 
        die ("Error de conexion a la base de datos o la base de datos no existe."); 
        $datos_usuario = mysql_query($consulta);
        
        while ($fila = mysql_fetch_array($datos_usuario, MYSQL_NUM)) {
            printf("ID: %s  Nombre: %s Apellidos: %s Edad: %s Sexo: %s", $fila[0], $fila[1], $fila[2], $fila[3], $fila[4]);  
        }
        */
        
function anyadir_usuario($nombre,$apellidos,$edad){
    $server="localhost";
    $db="usuarios";
    $user="jonathanr4m";
    $pass="";
    $conexion=new mysqli($server,$user,$pass,$db);
    mysqli_query($conexion,"INSERT INTO usuario (nombre,apellidos,edad) VALUES ('$nombre','$apellidos','$edad')");
    //UPDATE `usuario` SET nombre="Peter",apellidos="Griffin",edad=67,sexo="otro" WHERE nombre="Glenn"
    /* Antiguo comando 'mysql'
        $consulta = "SELECT * FROM usuario"; //Almacena la consulta
        $enlace = mysql_connect('localhost', 'raulcompanybravo', '') or
        die('No pudo conectarse: ' . mysql_error());;
        $bd = mysql_select_db("usuarios", $enlace) or 
        die ("Error de conexion a la base de datos o la base de datos no existe."); 
        $datos_usuario = mysql_query($consulta);
        
        while ($fila = mysql_fetch_array($datos_usuario, MYSQL_NUM)) {
            printf("ID: %s  Nombre: %s Apellidos: %s Edad: %s Sexo: %s", $fila[0], $fila[1], $fila[2], $fila[3], $fila[4]);  
        }
    */
}

function mostrar_db(){
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
        print("<td>".$rows["id"]."</td>");
        print("<td>".$rows["nombre"]."</td>");
        print("<td>".$rows["apellidos"]."</td>");
        print("<td>".$rows["edad"]."</td>");
        print("</tr>");
        }
        print("</table>");
    $resultado->free();
    
}  

function crear_Conexion(){$conexion=new mysqli("localhost","jonathanr4m","","usuarios");}
function mod_usuario(){
mysqli_query($conexion,"UPDATE usuario SET nombre='Peteroman',apellidos='Griffin',edad=67 WHERE nombre='Peter'");
}
//
//anyadir_usuario("ElBala","Premo",41);

crear_Conexion();
//mod_usuario();
mostrar_db();








//print conectar_db();







?>
    </body>
</html>