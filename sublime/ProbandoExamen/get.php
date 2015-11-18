<?php
$nombre = null;

if(isset($_GET['nombre'])){
    $nombre = $_GET['nombre'];
    echo $nombre;
}

?>

<form method='GET'>
    <input type='text' name="nombre">
    <input type="submit" value="Enviar">
</form>