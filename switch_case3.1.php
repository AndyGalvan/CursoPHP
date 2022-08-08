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
        
        $contra= $_POST["contra_usuario"];

        $nombre= $_POST["nombre_usuario"];

        switch (true){ //En vez de usar llaves para cerrar el switch podemos hacerlo de la siguiente forma: switch(): (y al final terminar con un endswitch;)

            case $nombre== "Juan" && $contra== "1234":
                
                echo "Usuario autorizado. Hola Juan";
                break;
            case $nombre== "Maria" && $contra== "1234":

                echo "Usuario autorizado. Hola Maria";
                break;
            case $nombre== "Pedro" && $contra== "1234":

                echo "Usuario autorizado. Hola Pedro";
                break;
            default:
                
                echo "Usuario no autorizado";
        }

        /*if($edad <= 0){

            echo "Edad incorrecta";

        }else if($edad <= 18){

            echo "Eres menor de edad";
            
        }else if($edad <= 40){

            echo "Eres joven";
            
        }else if($edad <= 65){

            echo "Eres maduro";

        }else if($edad <= 110){

            echo "Cuidate";

        }else{

            echo "Edad incorrecta";
            
        }*/
    }

?>