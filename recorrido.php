<?php

// Recorrer el arreglo ciudades
$ciudades = array("B" => "Bogotá", "M" => "Medellin", "Cali", "Neiva", "Cartagena");
   
echo "<h1> Código   -   Ciudad</h1>";
foreach ($ciudades as $clave => $ciudad) {    
    echo '<pre>';
    echo '<h1>'."   ".$clave."   -   ".$ciudad.'</h1>';
    echo '</pre>';
    echo "<hr />";
}
?>

