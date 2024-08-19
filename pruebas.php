<?php

$frutas[] = "manzana";
$frutas[] = "naranja";
$frutas[2]="uva";
$frutas[]=2;

foreach ($frutas as $clave => $valor){
    echo $clave. ": ".$valor."<br>";
}

$alumno = array (
    'id' => 5,
    'nombre' => 'Manuel',
    'apellido' => 'García López',
    'edad' => 23
);
$alumno['sexo'] = "V"; //y podemos añadir elementos
echo ($alumno['nombre']);



$filas = array(
    0 => [11,12],
    1 => [21,22],
    2 => [31,32]
);
echo "<br><br>";
foreach ($_SERVER as $elem){
    echo $elem."<br>";
}


