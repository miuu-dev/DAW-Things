<?php
require_once("./model/Coche.php");
require_once("./controller/CocheController.php");

$controller = new CocheController();

$controller->index();

$home = "www/PDO/MVC/cochesTabla/index.php/";
//Quito la home de la ruta de la barra de direcciones
$ruta = str_replace($home, "", $_SERVER["REQUEST_URI"]);
//Creo el array de ruta (filtrando los vacíos)
$array_ruta = array_filter(explode("/", $ruta));
$array_ruta = array_values($array_ruta);

//Decido la ruta en función de los elementos del array
if (
    isset($array_ruta[0]) && $array_ruta[0] == "ver" && 
    isset($array_ruta[1]) && is_numeric($array_ruta[1])) {
    // Llamamos al método ver pasándole el ID numérico
    $controller->ver($array_ruta[1]);
} 
else if (
    isset($array_ruta[0]) && $array_ruta[0] == "color" && 
    isset($array_ruta[1])) {
    // Llamamos al método color pasándole el texto del color
    $controller->color($array_ruta[1]);
} 
else {
    // Si no coincide con ninguna ruta anterior, mostramos el listado general por defecto
    $controller->index();
}