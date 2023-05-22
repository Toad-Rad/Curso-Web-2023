<!-- <!DOCTYPE html>

<head>
    <title>Venta de boletos</title>
    <link rel="icon" href="./gato.jpg" type="image/x-icon"> 
</head>

<body>
    <h1>Ticket Catser</h1>
    <h2>¡Reserve sus boletos!: </h2>
   
    <form action="./desplegar.php" method="post">
        <fieldset>
            <legend>Datos del Evento</legend>
            <label>Nombre: 
                <input type="text" id="nombre" name="nombre"/>
            </label>
            <br>
            <br>

            <label>Apellido:
                <input type="text" id="apellido" name="apellido"/>
            </label>
            <br>
            <br>

            <label for="Artista">Artista: </label>
            <select id="artista">
                <option value="art1">Héroes del Silencio</option>
                <option value="art2">Type O Negative</option>
                <option value="zona3">Luis Miguel</option>
                <option value="zona4">Zoé</option>
            </select>
            <br>
            <br>

            <label for="fecha">Fecha del Evento: </label>
            <input type="date" id="fechita">
            <br>
            <br>

            <label for="lugar">Lugar: </label>
            <select id="espacio">
                <option value="local1">Foro Sol</option>
                <option value="local2">Arena Ciudad de México</option>
                <option value="local3">Palacio de los Deportes</option>
                <option value="local4"></option> 
            </select>
            <br>
            <br>

            <label for="zona">Zona:</label>
            <select id="zona_evento">
                <option value="zona1">General A</option>
                <option value="zona2">General B</option>
                <option value="zona3">Gradas Izquierda</option>
                <option value="zona4">Gradas derecha</option>
            </select>
            <br>
            <br>

            <label for="boletos">Número de Boletos: </label>
                <input type="text" id="num_bole" name="num_bole">

            <br>
            <br>
            <button type="reset">Borrar</button>
            <button type="submit">Enviar</button>

        </fieldset>
    </form>
</body> -->

<?php

    //Obtener Valores del Formulario


    $n = (isset($_POST['nombre']) && $_POST["nombre"] != "")? $_POST['nombre'] : "Falta Valor";

    $a = (isset($_POST['apellido']) && $_POST["apellido"] != "")? $_POST['apellido'] : "Falta Valor";

    $art = (isset($_POST['artista']) && $_POST["artista"] != "")? $_POST['artista'] : "Falta Valor";

    $f = (isset($_POST['fechita']) && $_POST["fechita"] != "")? $_POST['fechita'] : "Falta Valor";

    $e = (isset($_POST['espacio']) && $_POST["espacio"] != "")? $_POST['espacio'] : "Falta Valor";

    $z = (isset($_POST['zona_evento']) && $_POST["zona_evento"] != "")? $_POST['zona_evento'] : "Falta Valor";

    $b = (isset($_POST['num_bole']) && $_POST["num_bole"] != "")? $_POST['num_bole'] : "Falta Valor";

    $ex = (isset($_POST['checkbox']) && $_POST["checkbox"] != "")? $_POST['checkbox'] : "Falta Valor";


    //Desplegar boletos
    //Concatenar para poner html+php+html

    if($b <= 15)
    {
        for($i = 1; $i<= $b; $i++)
        {
            echo 
            '
            <table border="2" cellpading="40px">
                <thead>
                    <tr>
                        <td>Boletos Válidos para:'.$art.'</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>'.$n.'</td>
                        <td>'.$a.'</td>
                        <td>'.$f.'</td>
                        <td>
                        ';//Cerrar echo para estructura de control
                            switch ($art)
                            {
                                case 'Héroes del Silencio':
                                    echo '<img src= "./heroes.jpg" width="" alt="Heroes">';
                                    break;
                                
                                case "Type O Negative":
                                    echo '<img src="./typo.jpg" weight="240px" height="240px" alt="Typo">';
                                    break;

                                case "Luis Miguel":
                                    echo '<img src="./luismi.jpg" weight="240px" height="240px" alt="Typo">';
                                    break;

                                case "Zoé":
                                    echo '<img src="./zoe.jpg" weight="240px" height="240px">';
                                    break;
                                    //Nomas va el valor deseado entre comillas
                            }echo
                        '
                        </td>
                    </tr>

                    <tr>
                        <td>'.$e.'</td> 
                        <td>'.$z.'</td>
                        <td>';foreach($ex as $list)
                            {
                                echo $list."<br>";
                            }
                        echo'</td>
                    </tr>

                    <tr>
                        <td>
                        ';
                        switch ($e)
                        {
                            case "Foro Sol":
                                echo '<img src="foro.jpg" weight="240px" height="240px">';
                                break;
                            
                            case "Arena Ciudad de Mexico":
                                echo '<img src="arena.jpg" weight="240px" height="240px">';
                                break;

                            case "Palacio de los Deportes":
                                echo '<img src="palacio.jpg" weight="240px" height="240px">';
                                break;

                            case "Auditorio Nacional":
                                echo '<img src="auditorio.jpg" weight="240px" height="240px">';
                                break;
                        }echo
                        '
                        </td>
                        <td>'.$z.'</td>
                    </tr>
                </tbody>

            </table>
            ';
        }
    }

        else if($b > 15) 
        {
                for($i = 1; $i<= 15; $i++)
                {
                    echo 
                    '
                    <table border="2" cellpading="40px">
                        <thead>
                            <tr>
                                <td>Boletos Válidos para:'.$art.'</td>
                            </tr>
                        </thead>
        
                        <tbody>
                            <tr>
                                <td>'.$n.'</td>
                                <td>'.$a.'</td>
                                <td>'.$f.'</td>
                                <td>
                                ';//Cerrar echo para estructura de control
                                    switch ($art)
                                    {
                                        case "Héroes del Silencio":
                                            echo '<img src="heroes.jpg" weight="240px" height="240px">';
                                            break;
                                        
                                        case "Type O Negative":
                                            echo '<img src="typo.jpg" weight="240px" height="240px">';
                                            break;
        
                                        case "Luis Miguel":
                                            echo '<img src="luismi.jpg" weight="240px" height="240px">';
                                            break;
        
                                        case "Zoé":
                                            echo '<img src="zoe.jpg" weight="240px" height="240px">';
                                            break;
                                            //Nomas va el valor deseado entre comillas
                                    }echo
                                '
                                </td>
                            </tr>
        
                            <tr>
                                <td>'.$e.'</td> 
                                <td>'.$z.'</td>
                                <td>';foreach($ex as $list)
                                    {
                                        echo $list."<br>";
                                    }
                                echo'</td>
                            </tr>
        
                            <tr>
                                <td>
                                ';
                                switch ($e)
                                {
                                    case "Foro Sol":
                                        echo '<img src="foro.jpg" weight="240px" height="240px">';
                                        break;
                                    
                                    case "Arena Ciudad de Mexico":
                                        echo '<img src="arena.jpg" weight="240px" height="240px">';
                                        break;
        
                                    case "Palacio de los Deportes":
                                        echo '<img src="palacio.jpg" weight="240px" height="240px">';
                                        break;
        
                                    case "Auditorio Nacional":
                                        echo '<img src="auditorio.jpg" weight="240px" height="240px">';
                                        break;
                                }echo
                                '
                                </td>
                                <td>'.$z.'</td>
                            </tr>
                        </tbody>
        
                    </table>
                    ';
                }
                $b -= 15;
                echo "Limite de boletos alcanzado. Faltaron ".$b." boletos";
        }

?>