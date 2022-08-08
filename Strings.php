<!DOCTYPE html>
<html>
    <head>
        <title>Strings</title>
    </head>
    <body>

    <style>

        .resaltar{
            color:crimson;
            font-weight: bold;
        }

    </style>

    <?php 
    
        echo "<p class= 'resaltar'>Esto es un ejemplo de frase en rojo</p>";
        /* Tambien se puede hacer:
        echo "<p class= \"resaltar\"> Esto es un ejemplo de frase<?p>"; */

        $nombre= "Juan";

        echo "Hola $nombre <br>"; //que no es lo mismo que 'Hola $nombre' ya que las '' imprimen literarl
        
        /* strcmp: compara strings teniendo en cuenta las mayusculas 
        y strcasecmp: compara strings compara strings ignorando mayusculas
        ambas funciones devuelven */
        
        $variable1= "Casa";
        $variable2= "CASA";
        
        $resultado= strcmp($variable1, $variable2); //Devuelve 1 si no son iguales. 0 si son iguales. 1=True y 0=False

        echo "El resultado es  $resultado <br>";

        $resultado1= strcasecmp($variable1, $variable2);

        echo "El resultado es $resultado1 <br>";

        if($resultado1){
            echo "No coinciden";
        }else{
            echo "Coinciden";
        }

    ?>




    </body>
</html>