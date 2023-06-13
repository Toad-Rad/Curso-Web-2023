<?php
    require "config.php";
    $conexion = connect ();

    if(!$conexion)
    {
        echo "No se pudo conectar a la base";
    }else
        {
            $sql = "SELECT type_id, type_name FROM types";//peticion
            $res = mysqli_query($conexion, $sql);
            $respuesta = array();
            while($datos = mysqli_fetch_assoc($res)) //se converte la función en un arreglo asociativo
            {
                $respuesta[] = $datos;
            }
            echo json_encode($respuesta);//formatea a JSON y JS lo hace un objeto
        }
?>