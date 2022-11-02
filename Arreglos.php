<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
    <style>
        body{ background-color: #B5CDE6; font-family: Arial; font-size:4em; padding: 50 px;
        }
    </style>
</head>
<body>
    <?php
        $frutas = array("platano", "manzana","uvas", "fresa");
        print_r($frutas);

        echo $frutas[1];

        echo "<br>";
        echo count ($frutas)." elemento";

        echo "<br>";
        for ($i=0; $i < count($frutas); $i++) { 

            echo $frutas[$i] . "<br />";
            
        }

        $edades = array("Charly" => 34, "Mich" => 23, "OMar" => 32);

        print_r($edades);

        echo "<br>";
        echo $edades ['Mich'];
        echo "<br>";

        foreach ($edades as $key => $value) {
            echo $key . " tiene el valor de " . $value . "<br />";
        }
    ?>
</body>
</html>