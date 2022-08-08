<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>>Bucles</title>
</head>

<body>
    <?php

            $var1=7;

            while($var1 < 6){

                echo "Estamos ejecutando el codigo del bucle <br>";
                $var1++;
            }

            echo "Hemos salido del bucle <br>";
            
            do{ //Lo que hace el dowhile es que ejecuto por lo menos UNA vez lo de adentro. 

                echo "Estamos ejecutando el codigo del bucle 2 <br>";
                $var1++;
            }while($var1 < 6);

            echo "Hemos salido del bucle 2 <br>";
        ?>
</body>

</html>