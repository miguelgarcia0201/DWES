<?php

$conexion = new mysqli("localhost", "root", "", "bbdd", 3306);

//Verificamos conexion
if($conexion-> connect_error){
    die("Error de conexion: ". $conexion->connect_error);
}

$resultado = $conexion ->query("SELECT * FROM alumnos");
if ($resultado) {
    while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)) {
        // Convertir la fila (array) en una cadena
        $cadena = implode(", ", $fila);
        echo $cadena . "<br>";
    }
    $resultado->free();
}