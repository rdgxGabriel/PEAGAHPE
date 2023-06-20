<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Data e Hora em php</title>
</head>
<body>
    <?php
        date_default_timezone_get("America/Sao_Paulo")
        
        $dia = date("d"); 
        $mes = data("F"); 
        $ano = date("y"); 
        
        echo "Hoje é dia" $dia . "de" $mes . "de" $ano;
     
        $hora    = date("h");  
        $minuto  = date("i");
        $segundo = date("s");

        echo "<p>" "Agora são" $hora"horas". $minuto"minutos e" . $segundo"segundos" . "<p>";
    ?>
</body>
</html>