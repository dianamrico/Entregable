<?php
    /*function ObtenerVideojuegos()
    {
        try{
            //Importar la conexion
            require 'database.php';
            //var_dump($db);

            //Escribir el codigo SQL
            $sql = "SELECT * FROM videojuego";
            $consulta = mysqli_query($db,$sql);
            
            //Obtener los resultados
            /*echo "<pre>";
            var_dump(mysqli_fetch_row($consulta));
            echo "</pre>";*/
            /*while($row = mysqli_fetch_assoc($consulta))
            {
                echo "<pre>";
                var_dump($row);
                echo "</pre>"; 
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }
    ObtenerVideojuegos();