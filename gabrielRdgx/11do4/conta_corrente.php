<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/controle.css">
    <title>Controle bancario</title>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            echo "<h1>CONTROLE BANCARIO EM PHP<br></h1>";
            $Nome_Banco =""; //ARMAZENA NOME DO BANCO 
            $Tipo_Conta ="";// armazena o tipo da conta
            $Nome_Correntista = $_POST["nome"];
            echo "<strong>Nome do correntista: </strong>" . $Nome_Correntista;
            $Banco            = $_POST["banco"];

            //exibindo o nome do banco completo
            if($Banco == "caixa")
                $Nome_Banco = "Caixa Econômica Federal";
            else if($Banco == "santander")
                $Nome_Banco = "Banco Satander";
            else if($_Banco == "mercantil")
                $Nome_Banco = "Banco Mercantil do Brasil";
            else if($Banco == "brasil")
                $Nome_Banco = "Banco do Brasil";
            else if($Banco == "bradesco")
                $Nome_Banco = "Banco Bradesco";
            else
                $Nome_Banco = "Você não selecionou um banco!";
            echo "<strong><br>Nome do banco: </strong>" .$Nome_Banco;// exibe o nome completo do banco

        }
        else
        {
            echo "Atenção. voce tem que cadastrar os dados primeiro";
            echo "<p><a href='banco_cc.php'>Cadastro da Conta Corrente</a></p>";

        }
    ?>
</body>
</html>