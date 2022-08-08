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

        $nombre= $_POST["nombre_usuario"];

        switch ($nombre){

            case "Juan":
                
                echo "Usuario autorizado. Hola Juan";
                break;
            case "Maria":

                echo "Usuario autorizado. Hola Maria";
                break;
            case "Pedro":

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