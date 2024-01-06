<?php 
    # caracter 
    $letra = 'm';
    # entero
    $edad = 22;
    # cadena
    $nombre = 'Marcos';
    # flotante 
    $peso = 55.10;
    # booleano
    $sexo = false;
    # arreglo
    $direccion = [
        "calle" => "Calle Principal",
        "numero" => 123,
        "colonia" => "La Colonia"
    ];
    $ubicacion = array( 'Calle Principal', 123, 'La Colonia');
    # nulos
    $nada = null;
    $genero = ($sexo) ? "Mujer" : "Hombre";
    echo "¡Hola!, mi nombre es $nombre, tengo $edad años. <br>";
    echo "<br>Datos de la persona <br>";
    echo "
            Peso: $peso kg<br>
            Sexo: $genero <br>
        ";
    echo "<br>Dirección<br>";
    echo "
            Calle:  $direccion[calle]<br>
            Numero: $direccion[numero]<br>
            Colonia:$direccion[colonia]<br>
        ";