<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <div class="formulario" style="width: 40%; margin: 20px auto; border: 1px solid #333; padding: 40px; border-radius: 30px;">

    <form action="c9_ValidarDatos.php" method="POST">

      <?php      

        if(isset($_POST['userName'])) {

          $nombre = $_POST['userName'];
          $contrasena = $_POST['password']; 
          $correo = $_POST['gmail'];
          $pais = $_POST['pais'];

          if (isset($_POST['nivel'])) {
            $nivel = $_POST['nivel'];
          } else {
            $nivel = "";
          }
          
          if (isset($_POST['lenjuages'])) {
            $lenjuages = $_POST['lenjuages'];
          } else {
            $lenjuages = [];
          }
          

          $campos = array();        
          if($nombre == "") {
            array_push($campos, "El campo Nombre de usuario esta vacio");
          } 

          if($contrasena == "" || strlen($contrasena) < 6 ) {
            array_push($campos, "El campo Contraeña puede estar vacio o le faltan caracteres (se requieren 6 como minino) ");
          }

          if($correo == "" || strpos($correo, "@") === false ) {
            array_push($campos, "Ingresa un correo valido");
          }

          if($pais == "") {
            array_push($campos, "Selecciona el país de origen");
          }
          if($nivel == "") {
            array_push($campos, "Seleccione un nivel de desarrollo");
          }

          if($lenjuages == "" || count($lenjuages) < 2) {
            array_push($campos, "Seleccione almenos dos lenjuages de desarrollo");
          }

          if(count($campos) > 0){
            echo "<div class='alert-error alert'>";
              for($i = 0; $i < count($campos); $i++) {
                echo "<li> $campos[$i] </li>";
              }
            echo "</div>";
          } else {
            echo "
              <div class='alert-correcto alert'>
                Datos correctos
              </div>
            "; 
          }
        }

        
      ?>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre de usuario</label>
        <input type="text" class="form-control" id="userName" name="userName"  placeholder="usuario1234" value="<?php echo $nombre ?>">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Correo electronico</label>
        <input type="email" class="form-control" id="gmail"  name="gmail" placeholder="name@example.com" value="<?php echo $correo ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" placeholder="" name="password" value="<?php echo $contrasena ?>">
      </div>
      <select class="form-select" name="pais">
        <option selected value="">Seleccione un país</option>
        <option value="mx" <?php if($pais == "mx") echo "selected"?> >México</option>
        <option value="eu" <?php if($pais == "eu") echo "selected"?> >Estados Unidos</option>
        <option value="es" <?php if($pais == "es") echo "selected"?> >España</option>
        <option value="ar" <?php if($pais == "ar") echo "selected"?> >Argentina</option>
        <option value="ch" <?php if($pais == "ch") echo "selected"?> >China</option>
      </select>
      <label for="">Nivel de desarrollo</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="nivel" value="principiante" <?php if($nivel == "principiante") echo "checked";?>>
        <label class="form-check-label" for="flexRadioDefault1">
          Principiante
        </label>        
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="nivel" value="intermedio" <?php if($nivel == "inertermedio") echo "checked";?>>
        <label class="form-check-label" for="flexRadioDefault1">
          Intermedio
        </label>
        
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="nivel" value="avanzado" <?php if($nivel == "avanzado") echo "checked";?>>
        <label class="form-check-label" for="flexRadioDefault1">
          Avanzado
        </label>
      </div>      
      <label for="">Lenjuages dominados</label>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="PHP" <?php if(in_array("PHP",        $lenjuages)) echo "checked"; ?> name="lenjuages[]">
        <label class="form-check-label" for="flexCheckDefault">
          PHP
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Java"  <?php if(in_array("Java",     $lenjuages)) echo "checked"; ?> name="lenjuages[]">
        <label class="form-check-label" for="flexCheckDefault">
          java
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="js"  <?php if(in_array("js",         $lenjuages)) echo "checked"; ?> name="lenjuages[]">
        <label class="form-check-label" for="flexCheckDefault">
          js
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Python"  <?php if(in_array("Python", $lenjuages)) echo "checked"; ?> name="lenjuages[]">
        <label class="form-check-label" for="flexCheckDefault">
          Python
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Swift" <?php if(in_array("Swift",    $lenjuages)) echo "checked"; ?> name="lenjuages[]">
        <label class="form-check-label" for="flexCheckDefault">
          Swift
        </label>
      </div>
      <input type="submit" class="btn btn-primary" placeholder="Enviar">
    </form>
  </div>
</body>
</html>