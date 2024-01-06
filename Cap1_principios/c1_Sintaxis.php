<?php
    # Con el signo de pesos declaramos una variable y no estamos indicando el tipo de dato ya que le podemos asignar cualquier valor a la variable 
    $edad = 22;
    $nombre = 'Marcos';
    $anioActual = 2023;
    $anioNacimiento = $anioActual - $edad;
    $nacionalidad = "Mexicana";
    $ciudad = "Chilapa de Álvarez";
    $estado = "Guerrero";

    # Para mostrar el valor lo podermos hacer con la funcion "echo" o "print" 
    # Nota: para mostrar variables en una cadena de texto podemos usar "" (comillas dobles) o '' (comillas simples) en el caso de las comillas simples tendremos que concatenar la cadena de texto con las varibles. 
    
    echo "Mi nombre es $nombre tengo $edad años <br>";
    echo "Naci en el año $anioNacimiento <br> Naci en la ciudad de $ciudad, $estado <br> Con nacionalidad $nacionalidad";    
?>