<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>

<body>
    <?php

        $datos=array("Nombre"=>"Andy", "Apellido"=>"Galvana", "edad"=>"21");

        //$datos="Martin";

        if(is_array($datos)){

            echo "Es un Array";
        }else{

            echo "No es un Array";
        }



    ?>
</body>

</html>