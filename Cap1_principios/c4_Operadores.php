<?php 
    # operadores
    $x = 5;
    $y = 10;

    // operadores aritmeticos
    echo $x+$y;
    echo '<br>';

    echo $x-$y;
    echo '<br>';
    
    echo $x/$y;
    echo '<br>';
    
    echo $x*$y;
    echo '<br>';
    
    echo $x%$y;
    echo '<br>';

    echo $x**$y;
    echo '<br>';

    // operadores de asignacion

    $x += $y;
    echo $x . '<br>';
    $x = $x + $y;
    echo $x . '<br>';

    // operadores de comparacion

    # === estrictamente igual
    # >   mayor que
    # <   menor que
    # != diferente de
    # !== diferente de con tipo de dato

    var_dump($x == $y);

    // Operadores de incrementacion y decementacion

    $x++;

?>