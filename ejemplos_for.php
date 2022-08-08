<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>>Bucles for</title>
</head>

<body>
    <?php

            /*for($i=0; $i <= 10; $i++){

                echo "<p> Hemos entrado al bucle </p>";

                if($i == 6){

                    echo "Bucle interrumpido";

                    break;
                }

            }*/  

           //TABLA DE MULTIPLICACION DEL NUEVE

            /*for($i=0; $i<=10; $i++){

                echo "9 x $i = " . 9*$i . "<br>";
                //echo "9 x $i =  (9*$i) <br>"; ESTO NO ES VALIDO YA Q NO NOS DEVUELE LA MILTIPLICACION XD.

            }

            echo "Hemos salido del bucle";*/

            //TABLA DE DIVICION DEL NUEVE

            for($i=10; $i>=-10; $i--){

                if($i == 0){

                    echo "No es posible dividir por cero. <br>";
                    continue; //El continue; lo que hace es saltarse esa $i == 0. Ya que no se puede dividir por cero.
                }
                echo "9 / $i = " . 9/$i . "<br>";
                
            }

            echo "Hemos salido del bucle";

    ?>
</body>

</html>