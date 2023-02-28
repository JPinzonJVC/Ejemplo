<?php
    echo "<h1>CALCULADORA</h1>";

    $resultado = 0;

    //isset es un disparador, funciona bajo excitación 
    if(isset($_GET["suma"])){

        $resultado = $_GET["num1"] + $_GET["num2"];
    }

    if(isset($_GET["resta"])){

        $resultado = $_GET["num1"] - $_GET["num2"];
    }

    if(isset($_GET["division"])){
        if($_GET["num2"] = "0")
        {
            $resultado = "Error";
        }
        else
        $resultado = $_GET["num1"] / $_GET["num2"];
    }

    if(isset($_GET["multiplicacion"])){

        $resultado = $_GET["num1"] * $_GET["num2"];
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora</title>
    </head>
    <body>
        <form action="" method="get">
            <input type="number" name="num1" required/>
           
            <input type="submit" name="suma" value="+"/>
            <input type="submit" name="resta" value="-"/>
            <input type="submit" name="division" value="%"/>
            <input type="submit" name="multiplicacion" value="*"/>
          
            <input type="number" name="num2" required/>
            <?php
                echo '<input type="text" value="= '.$resultado.'" disabled>'
            ?>
            

        </form>    
    </body>
</html>