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

        if($edad <= 0){

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
            
        }
        //OTRA FORMA DE HACER LO MISMO XD
        
        /*switch(true):
            case $edad <= 0:
                echo "Edad incorrecta";
                break;
            case $edad <= 18:
                echo "Eres menor de edad";
                break;
            case $edad <= 40:
                echo "Eres joven";
                break;
            case $edad <= 65:
                echo "Eres maduro";
                break;
            case $edad <=110:
                echo "Cuidate";
                break;
            default:
                echo "Edad incorrecta";
            endswitch;*/
    }

?>