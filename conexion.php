<?php

$conexion = new mysqli("localhost", "root", "Ivankek99edlp", "pokedex", 3306);

if ( $conexion->connect_error ){
    header("locations:error404.php");
} 

?>