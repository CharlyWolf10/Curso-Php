<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #bde85f;
        }
        div{
            background: white;
            padding: 20 px;
            margin: 0 auto;
            width: 200px;
        }
        h1{font-size: 36px;}
    </style>
</head>
<body>
    <div>
        <?php

            $hora =24;
            if ($hora > 6 && $hora < 12) {
                echo "<h1>Hola Buenos Dias</h1>";
            }else if ($hora >=12 && $hora <= 18){
                echo "<h1>Hola Buenas tardes</h1>";
            }else{
                echo "<h1>Hola Buenas noches</h1>";

            }
        ?>

    </div>
    
</body>
</html>