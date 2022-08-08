<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays con for y foreach</title>
</head>
<body>
    
    <?php

        $datos=array("Nombre"=>"Andy", "Apellido"=>"Galvan", "edad"=>"21");

        $datos["Pais"]= "Argentina";// Asi se agrega un elemento a un array.

        foreach($datos as $clave=>$valor){

            echo "A $clave le corresponde $valor <br>";

        }
        echo "<br>";

        $semana[]="Lunes";
        $semana[]="Martes";
        $semana[]="Miercoles";
        $semana[]="Jueves";

        for($i=0; $i<count($semana); $i++){ //El count funciona pra contar los elementos de un array, es como el cardianl de una lita (Intro a los algoritmos)

            echo $semana[$i] . "<br>";
        }

        $semana[]="Viernes"; //Asi se agrega un elemento a una array.

        for($i=0; $i<count($semana); $i++){ //El count funciona pra contar los elementos de un array, es como el cardianl de una lita (Intro a los algoritmos)

            echo $semana[$i] . "<br>";
        }
        echo "<br>";
        //OTRA FORMA DE ESCRIBIRLO

        $semanas=array("Lunes", "Martes", "Miercoles", "Jueves");

        sort($semanas); //Ordena alfabeticamente el array.

        for($i=0; $i<count($semanas); $i++){

            echo $semanas[$i] . "<br>";

        }
        
    ?>

</body>
</html>