
<?php

    // coneccion base de datos 
    $db=mysqli_connect('localhost', 'root', '$Marcelar0811','portafolio');
    if(!$db)
    {
        echo "error al conectarse";
        exit;
    }
    else
    {
        //echo"DB conectada";
    }

?>