<?php
// Definición de arreglos1: modo tradicional

$estudiantes["Asociativo"] = "Daniela";
$estudiantes[] = "Diego";
$estudiantes[] = "Alejandro";
echo "<pre>";
var_dump($estudiantes);
echo '</pre>';
echo "<hr />";

// Definicion de arreglos2: utilizando la funcion array()

$ciudades = array("B" => "Bogotá", "M" => "Medellin,", "Cali", "Neiva", "Cartagena");
echo '<pre>';
var_dump($ciudades, $estudiantes);
echo '</pre>';
echo "<hr />";

//Definicion de arreglos 3: con Brackets '[]', PHP 5.4 --> 

$paises=["Colombia","Argentina","Peru", "ecu","Ecuador"];
$paises["Bra"] = "Brasil";
//Eliminar elemento de arreglo (Colombia) = 0
unset($paises[0]);
echo '<pre>';
var_dump($paises);
echo '</pre>';
echo "<hr />";




      

?>


