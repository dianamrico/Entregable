
<?php
include 'Include/header.php';
//require 'Include/header.php'; se debe usar require para lo que debe aparecer si o si en la pagina 


//Contenido
$contenido = [
    "nombre" => "Juan",
    "apellido" => "Perez",
    "edad" => "20",
    "nota" => 5.0,
    "cursos" => [
        "Matematicas",
        "Fisica",
        "Quimica"
    ],
    "informacion" => [
        'aIngreso' => 2023,
        'aNacimiento' => 2014
    ]
];

echo"<h2> Arreglo asociativo </h2><br/>";
echo "<pre>";
var_dump($contenido);
echo "</pre>";


//De Arreglo asociativo a Json
echo "<h2> Conversión a Json </h2><br/>";
$json = json_encode($contenido);
var_dump($contenido);

//De Json a Arreglo asociativo
echo "<h2> Conversión a Arreglo asociativo </h2><br/>";
$arreglo = json_decode($json, true);
echo"<pre>";
var_dump($arreglo);
echo"</pre>";


include 'Include/footer.php';
//require 'Include/footer.php';
?>