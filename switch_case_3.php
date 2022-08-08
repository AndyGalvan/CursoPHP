<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Chorizo que tengo que copiar xd</title>
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
    </head>
    <body>
        <h1>USANDO CONDICIONALES</h1>
        <form action="switch_case3.php" method="post" name="datos_usuarios" id="datos_usuarios">
            <table width="15%" align="center"> 
                <tr>
                    <td>Nombre:</td>
                    <td><label for="nombre_usuario"></label>
                    <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
                </tr>
                <tr>
                    <td>Edad:</td>
                    <td><label for="edad_usuario"></label>
                    <input type="text" name="edad_usuario" id="edad_usuario"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Envair"></td>
                </tr>
            </table>
        </form>
        <?php



        ?>
        
    </body>
</html>