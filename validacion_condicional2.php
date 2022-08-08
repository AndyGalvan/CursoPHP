<style>
    h1{
        text-align: center;
    }
    table{
        background-color: #ffc;
        padding: 5px;
        border: #666 5px solid;
    }
    .no_valido{
        font-size: 18px;
        color: #f00;
        font-weight: bold;
    }
    .validado{
        font-size: 18px;
        color: #0c3;
        font-weight: bold;
    }
</style>
<?php

    if(isset($_POST["enviando"])){
        
        $edad= $_POST["edad_usuario"];

        /*if($edad <= 18){

            echo "Eres menor de edad. No tienes acceso.";
        }else{

            echo "Eres mayor de edad. Tienes acceso.";
        }*/

        echo $edad <= 18 ? "Eres menor de edad. No tienes acceso." : "Puedes acceder. <br>"; //Hace lo mismo que el if de arriba, se llama OPERADOR TERNARIO.
        /*antes del ? va la comparacion despues el el msj si se cumple la comparacion
        y despues de los : va el msj si NO se cumple la comparacion.*/
        
        //TAMBIEN SE PUEDE HACER DE LAS SIGUIENTE FORMA.
        
        $resultado= $edad <= 18 ? "Eres menor de edad. No tienes acceso." : "Puedes acceder. <br>";

        echo $resultado;

    }

?>