<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Funciones Predefinidas</title>
</head>
<body>

    <?php

        $palabra= "JUAN";
        $palabra1= "juan";

        echo (strtolower($palabra)) . "<br>";

        echo (strtoupper($palabra1)) . "<br>";

        echo (strtoupper(strtolower($palabra))) . "<br>"; //Funciones anidadas, en este caso una es la inversa de la otra por ende es como si no escribiera nada.

        function suma($num1, $num2){

            $resultado= $num1 + $num2;

            return $resultado;

        }

         echo suma(5,7) . "<br>"; //Si no le ponemos el echo no devolvera nada ya que en la funcion solo te devuelve el valor y no te lo imprime.

         function frase_mayus($frase, $conversion=true){

            $frase= strtolower($frase);
            
            if($conversion==true){

                $resultado= ucwords($frase);
            }else{

                $resultado= strtoupper($frase);
            }

            return $resultado;

         }

         // echo frase_mayus("ESTO es una prueba"); en esta linea al no pasarle un segundo argumento a la funcion esta queda en true ya que es un argumento por defecto.
         
         echo frase_mayus("ESTO es una prueba", false); // En este caso forzamos a que este valos por defecto que era true sea falso.

    ?>


</body>
</html>