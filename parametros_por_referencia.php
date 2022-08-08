<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Parametros por Referencia</title>
</head>

<body>

    <?php

        /*function incrementa($valor){

            $valor++;

            return $valor;

        }                                          // La funcion aca funciona normal devuelve un 6 seguido de un 5

        $numero= 5;

        echo incrementa($numero) . "<br>";

        echo $numero;*/

        function incrementa(&$valor){ // *por el & del argumento de la funcion(es un argumento referencia)

            $valor++;

            return $valor;

        }                                          // Pero aca no funciona igual por *, por ende la funcion va a devolver un 6 seguido de un 6 ya que esta referido el parametro que le enviamos entonces cuando la funcion incremente en uno a $valor incrementara en uno a $numero ya que esta referido con el signo '&'

        $numero= 5;

        echo incrementa($numero) . "<br>";

        echo $numero . "<br>";

        //EL SENTIDO DE ESTA FUNCION ES LO MISMO PERO CON UN STRING.

        function cambiar_mayus($param){

            $param= strtolower($param);

            $param= ucwords($param);

            return $param;

        }

        $cadena= "hOlA mUnDo";

        echo cambiar_mayus($cadena) . "<br>";

        echo $cadena;

    ?>


</body>

</html>