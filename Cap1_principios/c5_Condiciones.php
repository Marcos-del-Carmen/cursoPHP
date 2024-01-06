<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
<link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="cont cont1">
        <?php 
            
            $hora = 19;

            if($hora > 1 && $hora < 12){
                echo '<h1>Hola buenos días</h1>';
            } else if ($hora >= 12 && $hora <= 19) {
                echo '<h1>Hola buenas tardes</h1>';
            } else if ($hora > 19 && $hora <= 24) {
                echo '<h1>Hola buenas noches</h1>';
            }

        ?>
    </div>
    
</body>
</html>