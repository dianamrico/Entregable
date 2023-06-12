<?php
    //echo "Juegos";
    require'Include/funciones.php';
    $juegos = ObtenerVideojuegos();
    echo "<pre>";
    var_dump($juegos);
    echo "</pre>";
