<?php
    require "config.php";
    $conexion= connect();

    if(!$conexion)
    {
        echo "No se pudo establecer conexión con la base de datos"   
    }else   
        {
            $busqueda = (isset($_POST["busqueda"]) && $_POST["busqueda"] != "")? $_POST["busqueda"]: false;
            $sql = "SELECT pok_name FROM pokemon WHERE pok_name LIKE '%$busqueda%'";
            $res = mysqli_query($conexion, $sql);
            if(!$res)
            {
                $respuesta = array("ok" => true, "mensaje" => "Pokemon no encontrado");
            }else  
                {
                    
                }


        }
?>