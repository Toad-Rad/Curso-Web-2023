<?php
    $include = include("./config.php");
    $con = connect();

    $ID_USUARIO = 1;
    $fecha = "07/06/2023";
    $hora = "15:00";
    $descripcion=(isset($_POST['descripcion']) && $_POST["descripcion"] != "")? $_POST['descripcion'] : false;
    $corazon= (isset($_POST['n_corazones']) && $_POST["n_corazones"] != "")? $_POST['n_corazones'] : false;
    $n_comen= (isset($_POST['n_comentarios']) && $_POST["n_comentarios"] != "")? $_POST['n_comentarios'] : false;
    $n_retu= (isset($_POST['n_retuits']) && $_POST["n_retuits"] != "")? $_POST['n_retuits'] : false;


   if($include && $con)
   {
        if($ID_USUARIO && $fecha && $hora && $descripcion && $corazon && $n_comen && $n_retu)
        {
            $peticion = "INSERT INTO publicacion VALUES (0, 1, '$descripcion', '$fecha', '$hora', $corazon, $n_comen, $n_retu)";
            $query = mysqli_query($con, $peticion);
        }
   }
        
    ?>




<?php
// echo "<br>"
        // echo "<br>"
        // echo "<br>"

        // $select = "SELECT * FROM PUBLICACION";

        // $resul = mysqli_query($con, $select);

        // var_dump($resul);

        // $datos = mysqli_fetch_array($resul);  

        // $datos = mysqli_fetch_assoc($resul); //sirve para desplegar el valor usanod localidades asociativas

        // var_dump($datos);
        // echo "<br>";
        // echo "<br>";

        // while($row = mysqli_fetch_assoc($query))
        // {
        //     echo "<br>";
        //     var_dump($row);
        // }
?>