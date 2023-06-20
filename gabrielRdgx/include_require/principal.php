<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Include e Requires</title>
</head>
<body>
    <?php
        include "cabecalho.php"; //carrega(importa o arquivo cabeçalho)
    ?>

    <form name="strings" method="post" action="">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" maxlength="40" required>
        </p>
        <p>
            <input type="submit" name="executar" value="executar">
        </p>
    </form>
    <?php
        if(isset($_POST["executar"]))
        {
            $nome   =   $_POST["nome"];
            $nome = strtolower($nome);
            echo "<h3>Converte para minúsculas</h3>";
            echo "Nome: $nome";
            echo "<h3>Converte para maiúsculas</h3>";
            $nome = strtoupper($nome);
            echo "Nome: $nome";

            include "rodape.php";
        }
    ?>
</body>
</html>