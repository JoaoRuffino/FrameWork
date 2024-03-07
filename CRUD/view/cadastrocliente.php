<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <br><br>
    <div class="formulario">
    <form action="../model/inserircliente.php" method="POST">
        <label for="nome">Nome: </label>
        <input type="text" name="cxnome" id="nome"><br><br>
        <label for="e-mail">E-mail: </label>
        <input type="text" name="cxemail" id="e-mail"><br><br>
        <input type="submit" value="Gravar" class="enviar"><br><br>
    </form>
    <a href="../index.php">Voltar</a>
    </div>

    <div class="formulario">
    <form action="../model/pesquisaNomeCliente.php" method="POST">
        Digite o nome completo: <br>
        <input type="text" name="cxpesquisacliente">
        <input type="submit" value="Pesquisar">
    </form>
    </div>
</body>
</html>