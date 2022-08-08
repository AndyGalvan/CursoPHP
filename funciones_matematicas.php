<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Funciones Matematicas</title>
    </head>
    <body>

    <?php

        $num1= rand(10, 50); //Genera un numero aleatorio entre los parametros q se le pone. En caso de no poner parametro genera un numero aleatorio.

        echo "El numero es: " . $num1 . "<br>";

        $num2= pow(5, 3); //Asi se escribe la potencia, siendo el 5 la base y el 3 el exponente.

        echo "El numero es: $num2 <br>";

        $num3= 5.25; 

        echo "El numero es: " . round($num3) . "<br>"; //Lo que hace la funcion round es redonedar el numero.

        $num4= 5.74668238945898892; 

        echo "El numero es: " . round($num4, 2); //El segundo valor si no lo ponemos esta en predeterminado igual a cero, pero si lo modificamos con un int le decimos hasta que decimal queres q tomo.

        //Casting explicito

        $num5= "5";

        $resultado= (int) $num5;

    ?>

    </body>
</html>