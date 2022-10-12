<?php

    //funciones para string
    $mensaje = "hoy voy a aprender mucho";

    //longitud
    echo strlen($mensaje); //strlen(); define longitud de caracteres de cualo esta compuesto la cadena

    echo "<br>";
    //numero de palabras
    echo str_word_count($mensaje); //str_word_count(string); contea cada palabra de una cadena
    echo "<br>";
    //reversa
    echo strrev($mensaje);
    echo "<br>";
    //encontrar texto
    echo strpos($mensaje, "aprender");//strpos();StringPosition ponemos la cadena y posteriormente la palabra que desamos encontrar
    echo "<br>";
    //reemplazar texto
    echo str_replace("aprender", "nadar", $mensaje);
    echo "<br>";
    //convertir minusculas
    echo strtolower($mensaje);
    echo "<br>";
    //conertir a mayudculas
    echo strtoupper($mensaje);
    echo "<br>";
    //comparar cadenas
    echo strcmp("a", "b");
    echo "<br>";
    //Substraer cadena
    echo substr($mensaje, 5);
    echo "<br>";
    //remover espacios en blanco
    echo trim("             hola     foy   charly");
?>