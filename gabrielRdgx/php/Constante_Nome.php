<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de constant em PHP</title>
</head>
<body>
    <?php
        echo "<h3 alings='center'EXEMPLO DE CONSTANT EM PHP</h3><hr>";
        //definição de constant
        define("linguagem","PHP - Linguagem Dinâmica");
        echo "<strong>Linguagem: </strong>" . linguagem;
        define("linguagem", "A caracteristica de Linguagem em PHP, é que necessite de servidor para interpretar, ou seja compilar o código");
        echo Linguagem;
    ?>
</body>
</html>