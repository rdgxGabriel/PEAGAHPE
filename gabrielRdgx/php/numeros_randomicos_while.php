<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números randomicos utilizando looping While</title>
</head>
<body>
    <?php
        echo "<h3>NÚMEROS RANDÔMICOS - LOOPING WHILE </h3>";
        $numero = 0;
        $contador = 1;
        for ($contador = 1; $contador <8; $contador++)
        {
            $numero = rand(1,1000); //comando rand, gera numeros randômicos(aleatorios)
            echo "$contador" . " o numero gerado foi: " . $numero . "<br>";

        }
        echo "<hr><h2>Fim do looping <strong><em>WHILE</em></strong></h2>";
    ?>
    
</body>
</html>