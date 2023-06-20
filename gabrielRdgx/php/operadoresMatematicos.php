<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadors matematicos em PHP</title>
</head>
<body>
<?php
    echo "<h3>OPERADORES MATEMÁTICOS EM PHP</h3>";
    echo "<hr size='3' color='#ff0000' width='62%' align='left'>";
    $numero1-10;
    $numero2=15;
    echo "Número1: " . $numero1;
    echo "<br>Número2: " . $numero2;
    echo "<h4>Efetuando a soma do $numero1 mais o $numero2</h4>";
    $soma = $numero1 + $numero2;
    echo "<strong>Soma:</strong> " . $soma;
    // É possível inserir tags html no php, porém essas tags deverão ficar dentro das aspas.
    echo "<hr size='3' color='#ff0000' width='62%' align='left'>"; 
    echo "<h4>Efetuando a subtração do $numero1 mais o $numero2</h4>";
    echo "<h4>Efetuando a multiplicação do $numero1 mais o $numero2</h4>";
    echo "<h4>Efetuando a divisão do $numero1 mais o $numero2</h4>";

    echo "<h4>Exibindo o tipo da variável</h4>";
    echo var_dump($numero1) //exibe o tipo int
    echo var_dump($numero2) //exibe o tipo int
    //var_dump ele mostra o tipo da variavel, no caso as variaveis são os numeros 1 e 2 
    ?>
</body>
</html>