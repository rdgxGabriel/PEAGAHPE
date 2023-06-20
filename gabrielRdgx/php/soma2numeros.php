<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de dois números com formulario</title>
</head>
<body>
    <?php
       echo "<h3>Soma de 2 Números</h3>";
       echo "<form name='soma' method='post' action='Exibir_soma.php'>";
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

       //action= acessar outra página||mesma página
       //botões//
       //sutton - só execultará alguma ação se utilizar evento no javascript
       //submit- permite compilar(submeter,eviar)os dados para o que foi definido no action
       //reset- limpar os dados do forms
    ?>
</body>
</html>