<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mi primera pagina de php</title>
</head>
<body>

<?php
    
    echo "este es el primer mensaje <br>";
    
    include ("proporciona_datos.php");
    /*El include "incluye" la parte de ese programa
    Y ejecuta las lineas siguientes del programa*/
    /*El require "incluye" la parte de ese programa
    Pero a diferenci del include no ejecuta lo que sigue del programa */
    
    echo "este es el segundo mensaje <br>";
    
    dameDatos();  
?>
</body> 
</html>