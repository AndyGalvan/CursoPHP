<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Constantes</title>
    </head>
    <body>

    <?php
        //UNA CONSTANTE NO SE PUEDE REDEFINR.
    
        define("AUTOR", "Juan"); //El true se pone para que tome a la constante cuando la escribamos en minuscula.Pero sino no hace falta ponerlo si la escribimos en mayuscula siempre.

        echo "El autor es : AUTOR <br>"; //Estop no funciona ya que en vez de imprimir Juan imprime AUTOR.

        echo "El autor es: " . AUTOR . "<br>"; //En este caso si imprime Juan.

        //CONSTANTES PREDEFINIDAS

        echo "La lina de esta instruccion es: " . __LINE__ . "<br>";
        echo "Estamos trabajando con este fichero: " . __FILE__;

    ?>

    </body>
</html>