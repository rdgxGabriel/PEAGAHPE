<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Data e Hora em php</title>
</head>
<body>
    <?php
        date_default_timezone_get("America/Sao_Paulo")
        //Defina as varíaveis para receber o dia, mês e o ano
        $day = date("d"); //Extrair o dia da função date 
        $mes = data("F"); //Extrair o mês da função date
        $ano = date("y"); //Extrair o ano da função date

        //Exibe a data do sistema operacional
        echo $dia . $mes . $ano;

        //Define varíaveis para receber a hora, minuto e o segundo
        $hora    = date("h"); //Extrai a hora da função date 
        $minuto  = date("i") // Extrai o minuto da função date 
        $segundo = date("s") // Extrai o segundo da função date 

        //Exibe a hora do sistema operacional 
        echo "<p>" $hora . $minuto . $segundo . "<p>";
    ?>
</body>
</html>