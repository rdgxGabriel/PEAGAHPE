<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula e exibe a soma </title>
</head>
<body>
    <?php
        echo "<h3>CALCULA E EXIBE A SOMA</h3>";
        $numero1 = $_POST["num1"]; //recupera o conteudo digitado na caixa da pagina soma2numeros
        $numero2 = $_POST["num2"];
        echo "numero1: " .$numero1;
        echo "numero2: " .$numero2;
    ?>
</body>
</html>