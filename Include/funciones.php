
<?php

 /// aca se ubican todas las funciones 
    function obtenerVideojuegos(): array
    {
        try{

            /// importar la conexion 

            require'database.php';
            //var_dump($db);

            // ESCRIBIR CODIGO SQL

            $sql = " SELECT * FROM videojuego";
            $consulta = mysqli_query ($db,$sql);


            /// CREAR UN ARREGLO VACIO 

            $juegos=[];
            $i=0;

            /// Obtener los resultados///////// 

            // mostrandolo como arreglo asociativo

            /*echo "<pre>";
            var_dump(mysqli_fetch_assoc($consulta ));
            echo "<pre>";

              // mostrandolo como arreglo (lista / array))

            /*echo "<pre>";
            var_dump(mysqli_fetch_array($consulta ));
            echo "<pre>";*/

            // para verlo todo 

            /*echo "<pre>";
            var_dump(mysqli_fetch_all($consulta ));
            echo "<pre>";*/

            while($row = mysqli_fetch_assoc($consulta))
            {

                // aca se cambia el parametro de acuerso al dato ue queramos leer o consultar (que salga en pantalla )
                $juegos [$i] ['id'] = $row['id']; 
                $juegos [$i] ['nombre'] = $row['nombre']; 
                $juegos [$i] ['precio'] = $row['precio']; 
                $juegos [$i] ['cantidad'] = $row['cantidad']; 
                $i++;

                
            }

                /*echo "<pre>";
                var_dump($juegos);
                echo "</pre>";*/

                return $juegos;
        }

        catch(Exception $e)
        {
            echo $e -> getMessage();
        }
    }
    obtenerVideojuegos();
        


?>