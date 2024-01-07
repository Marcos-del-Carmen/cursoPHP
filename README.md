# Curso completo PHP y MySQL principiantes-avanzado #
## CAPITULO 1	##
Se habla sobre lo basico de cualquier tipo de lenjuage de programacion como ¿que es un variable?, asignacion a una variable, tipo de dato de una variable.
En cuanto html y php podemos usar formularios en los cuales recivimos y enviamos informacion y esta puede ser temporal o estar en una base de datos y para ello usamos get y post en el formario del html. 
* Metodos de envio

### GET <br>
>  form action="procesar.php" method="GET" 

### POST <br>
> form action="procesar.php" method="POST"


* Validación de datos

  - Nombre de usuario 
  - Correo 
  - Contraseña
  - Select (combo)
  - Radio Buttons
  - Checkboxes
 
### Uso de require() e include()
Bueno el include se sigue ejecuanto aunque marque un error a diferencia del require que cuando marca error se detiene lo que va ejecutar. El require se utiliza cuando sea necesario esa parte de codigo para el desarrollo del proyecto mientras que include se sigue ejecuando aunque haya errores. 

## Funciones ##
Podemos tener funciones en las cuales podemos hacer mas optimo el codigo y efeciente al momento de ejecutar por ejemplo en caso de realizar operacion podemos tener una funcion llamada suma, resta, multiplicacion, etc.. En las cuales cada una va realizar una operacion, como ejemplo tenemos la siguiente funcion. 
>      function suma($n1, $n2) {
>        return $n1 + $n2;
>      }
>      function resta($n1, $n2) {
>        return $n1 - $n2;
>      }
>      function multiplicacion($n1, $n2) {
>        return $n1 * $n2;
>      }
>      function division($n1, $n2) {
>        return $n1 / $n2;
>      }
