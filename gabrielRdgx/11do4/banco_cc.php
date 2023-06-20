<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle bancario- Conta corrente</title>
    <link rel="stylesheet" href="../css/estilos_cc.css">
</head>

<body>
    <form name="conta_corrente" method="post" action="conta_corrente.php">
        <table>
            <tr>
                <caption>Cadastro de conta corrente</caption>
                <td><label for="nome">Nome:</label></td>
                <td><input type="text" name="nome" size="40" maxlength="50" required
                        placeholder="Informe o nome do correntista"></td>
            </tr>
            <tr>
                <td><label for="agencia">Agência:</td>
                <td><input type="text" name="agencia" size="20" maxlength="20" required
                        placeholder="Informe o numero da agencia"></td>
            </tr>
            <tr>
                <td><label for="agencia">Banco:</td>
                <td>
                    <select name="banco">
                        <option value="#"></option>
                        <option value="caixa">Caixa Economica Federal</option>
                        <option value="brasil">Banco do Brasil</option>
                        <option value="mercantil">Banco Mercantil</option>
                        <option value="santander">Banco Satander</option>
                        <option value="bradesco">Banco Bradesco</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="conta_corrente">Conta corrente:</label></td>
                <td><input type="text" name="conta_corrente" size="30" maxlength="25" required
                        placeholder="Informe o numero da conta corrente"></td>
            </tr>
            <tr>
                <td><label for="tipo_conta">Tipo de conta:</label></td>
                </td>
                <td>
                    <input type="radio" name="tipo_conta">Conta Comum
                    <input type="radio" name="tipo_conta">Conta Especial
                </td>
            </tr>
            <tr>
                <td><label for="data_abertura">Data da abertura:</label></td>
                <td><input type="date" name="data_abertura" required></label>
            </tr>
            <tr>
                <td><label for="cpf">CPF: </label></td>
                <td><input type="text" name="cpf" required size="14" maxlength="14"></td>
            </tr>
            <tr>
                <td><label for="saldo_inicial">Saldo inicial: </label></td>
                <td><input type="number" name="saldo_inicial" value="0" step="0.01" min="0"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="cadastrar" name="cadastrar" 
                    class="botao">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>