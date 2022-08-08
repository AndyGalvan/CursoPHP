<!DOCTYPE html>
<html>
    <head>
        <title>Operadores de comparacion</title>
    </head>
    <body>

    <?php 
    
        $variable1= 8;

        $variable2= "8";

        $variable3= "Juan";

        if($variable1==$variable2){ //El (==) se usa para comparar si son iguales de valor pero no de tipo.
            echo "Son iguales <br>";
        }
        else{
            echo "No son iguales <br>";
        }
        if($variable1===$variable2){ //El (===) se usa para comparar si son iguales de valor y ademas el tipo de la expresion es el mismo.
        }
        else{
            echo "No son iguales <br>";
        }
        /*El operador != es para negar
        El operador <> es para negar valor y tipo
        Todos los demas son iguales q haskell */



    ?>

    </body>
</html>