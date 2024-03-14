<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Cadastro produtos</title>
</head>
<body>
<h1>Cadastro de Produtos</h1>
    <br><br>
    <div class="formulario">
    <form action="../model/inserirproduto.php" method="POST">
        <label for="produto">Produto: </label>
        <input type="text" name="cxproduto" id="produto"><br><br>
        <label for="data">Data de validade: </label>
        <input type="date" name="cxdata" id="data"><br><br>
        <label for="quantidade">Quantidade: </label>
        <input type="text" name="cxquantidade" id="quantidade"><br><br>
        <label for="valor">Valor: </label>
        <input type="text" name="cxvalor" id="valor"><br><br>
        <input type="submit" value="Gravar" class="enviar"><br><br>
    </form>
    <a href="../index.php">Voltar</a>
    </div>
    
    <div class="formulario">
        <form action="../model/pesquisaNomeProduto.php" method="POST">
            Digite o nome completo: <br>
            <input type="text" name="cxpesquisaproduto">
            <input type="submit" value="Pesquisar">
    </form>
    </div>
</body>
</html>