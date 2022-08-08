<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Variables</title>
</head>
<body>

<?php
    $nombre = "Andy";
    $edad = 21;
    print "Mi nombre es " . $nombre; 
    /*tambien se puede hacer de la sig. forma:
    print "Mi nombre es $nombre";
    */
    echo "Mi nombre es " . $nombre . " y tengo " . $edad;
    echo $nombre,$edad; // echo consume menos recursos(osea tarda menos en mostrar en pantalla)
    
?>
</body> 
</html>