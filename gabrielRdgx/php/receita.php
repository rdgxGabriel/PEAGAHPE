<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>controle de gastos</title>
</head>
<body>
    <?php 

    echo "<h3>Controle de gastos</h3>";
    echo "<form name='soma' method='post' action='soma2numeros.php'>";
    echo "<p>";
        echo "<label for='numero1'>Número1: </label>";
        echo "<input type='text' name='num1'>";
    echo "</p>";

    echo "<p>";
        echo "<label for='numero2'>Número2: </label>";
        echo "<input type='text' name='num2'>";
    echo "</p>";

    echo "<p>";
    ?>
    <input type='submit' value='Somar' name='somar'>
     <input type='reset' value='Limpar' name='limpar'>
     <?php
        echo "</p>";
        echo "</form>";
                echo "<h3>Controle de gastos</h3><hr size='3' color='#ff0000' width='62%' align='left'>";
            
                echo "<form name= soma>"
                $receita=""
                $despesas=""
                $total1="$receita . "
                $total2="$despesas . "


    ?>
</body>
</html>