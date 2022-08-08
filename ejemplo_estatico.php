<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Variables Estaticas</title>
</head>
<body>

<?php 

    function incrementaVariable(){

        static $contador = 0; //sirve parra que el contador siga sumando y no se reinicie

        $contador++;

        echo $contador . "<br>";

    }

    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();

?>


</body>
</html>