<?php 
    // Funciones para String
    $mensaje = "Hoy voy a aprender más de lo que aprendi ayer";
    # Longitug
    echo strlen($mensaje);
    echo'<br>';

    # Número de palabras
    echo str_word_count($mensaje);
    echo'<br>';

    # Reversa
    echo strrev($mensaje);
    echo'<br>';

    # Encontrar texto
    echo strpos($mensaje, "aprendi");
    echo'<br>';

    # Reemplazar texto 
    echo str_replace("aprendi", "memorize", $mensaje);
    echo'<br>';
    # Convertir a minúsculas
    echo strtolower($mensaje);
    echo'<br>';

    # Convertur a mayúsculas
    echo  strtoupper($mensaje);
    echo '<br>';

    # comparar cadenas
    echo strcmp("hola", "adios");
    echo '<br>';    

    # Subtraer cadena
    echo substr($mensaje, 10, 7);
    echo '<br>';

    # Remover espacios en blanco 
    echo trim("                Hola             soy                       Marcos");
    echo '<br>';
?>