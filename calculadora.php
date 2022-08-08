<style>
    .resultado{
        color: #f00;
        font-weight:bold;
        font-size: 32px;
        
    }
</style>
<?php

function calcular($calculo, $num1, $num2){
   
    if(!strcmp("Suma", $calculo)){
        
       /* global $numero1;
        global $numero2; 
        PERO TAMBIEN SE PODRIA USAR ESTA FORMA PONIENDOLOS DENTRO DE TODOS LOS ELSEIF.*/
        
        $resultado= ($num1 + $num2);
        
        echo "<p class='resultado'>El resultado es: $resultado</p><br>";
    }elseif(!strcmp("Resta", $calculo)){

        echo "<p class='resultado'>El resultado es: " . ($num1 - $num2) . "<br></p>";
    }elseif(!strcmp("Multiplicacion", $calculo)){ 

        echo "<p class='resultado'>El resultado es: " . ($num1 * $num2) . "<br></p>";
    }elseif(!strcmp("Division", $calculo)){

        echo "<p class='resultado'>El resultado es: " . ($num1 / $num2) . "<br></p>";
    }elseif(!strcmp("Modulo", $calculo)){ //tambien funcionaria si le pongo else solo.

        echo "<p class='resultado'>El resultado es: " . ($num1 % $num2) . "<br></p>";
    }elseif(!strcmp("Incremento", $calculo)){ //tambien funcionaria si le pongo else solo.

        $num1++;
        echo "<p class='resultado'>El resultado es: $num1 <br></p>";
    }elseif(!strcmp("Decremento", $calculo)){ //tambien funcionaria si le pongo else solo.

        $num1--;
        echo "<p class='resultado'>El resultado es: $num1 <br></p>";
    }
}

?>