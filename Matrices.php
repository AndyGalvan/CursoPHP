<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Arrays Multidimencionales</title>
</head>

<body>

    <?php

        $alimentos= array("fruta" => array("tropical"=>"kiwi",
                                           "citrico"=>"mandarina", 
                                           "otros"=>"manzana"), 
                                           
                          "Leche"=>array("animal"=>"vaca",
                                         "vegetal"=>"coco"), 

                          "Carne"=>array("vacuno"=>"lomo", 
                                         "porcino"=>"pata"));

        //echo $alimentos["Carne"]["vacuno"];

        foreach($alimentos as $clave_alim=>$alim){

            echo "$clave_alim: <br>";

            foreach($alim as $clave => $valor){

                echo "$clave=$valor<br>";

            }

            echo "<br>";

        }

        echo "<br>";

        //FORMA DE EXPRESAR EL ARRAY

        echo var_dump($alimentos); 

    ?>

</body>

</html>