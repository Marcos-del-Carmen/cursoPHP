<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
</head>
<body>
    <?php 

        $frutas = array("Platano", "Manzanas", "Uvas", "Fresas", "Naranjas", "");
        print_r($frutas);
        echo $frutas[1];

        echo count($frutas). " el arreglo tiene";
        echo '<br>';

        for($i =0; $i<count($frutas); $i++) {
            echo $frutas[$i].'<br>';
        }

        $edades = array("Marcos" => 22, "Tania" => 21, "Denisse" => 21);
        print_r($edades);
        echo'<br>';

        echo $edades['Tania'];
        echo '<br>';

        foreach($edades as $key => $value) {
            echo "$key tiene la edad de $value <br>";
        }
    ?>
</body>
</html>