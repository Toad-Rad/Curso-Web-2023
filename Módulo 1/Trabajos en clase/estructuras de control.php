<!DOCTYPE html>

<head>
    <title>Estruct</title>
</head>

<body>
    <?php
        for($a=1; $a <= 10; $a++)
        {
            echo $a." ";
        }

        while($a <= 10)
        {
            echo "<br><br>".$a++." ";
        }

        do
        {
            echo $a;
        }
        while($a < 10);

        echo "<br><br>"
        $instructores= array("Danda", "Gabo", "Majo", "Falcon", "Fersa", "Balsa", "Ara")
        foreach($instructores as $valor)
        {
            echo $valor." ";
        }

        echo "<br><br>"

        if($a > 10)
        {
            echo "si";
        }

        if($a > 10)
        {
            echo "si";
        }else if($a > 15)
        {

        }

        //Ternario

        $i=(isset($_POST['valor']) && $_POST("valor") != "")? $_POST("valor") : "Falta Valor";

        if($i >= 1 && $i <= 3)
        {

        }

    ?>

</body>