<?php 

    function dameNombre(){

        global $nombre; //golbal se tiene que usar dentro de la funcion, esto se hace para que cuando se usa el include o require No haya superposicion de variables(osea que no hayas variables con el mismo nombre xd)

        $nombre = "El nombre es " . $nombre;

    }

?>
