<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/listarproduto.css">

    <title>Listar Produtos</title>
</head>
<body>
    <?php 
    include_once "../factory/conexao.php";
    $consultar = "select * from produto";
    $executar = mysqli_query($conn, $consultar);

    while($linha = mysqli_fetch_array($executar)){

    

    ?>



    <form>
        Produto:
        <input type="text"  value="<?php echo $linha["nome"] ?>" ><br><br>
        Data de validade:
        <input type="date"  value="<?php echo $linha["datavalidade"] ?>" ><br><br>
        Quantidade:
        <input type="text" value="<?php echo $linha["qtd"] ?>"><br><br>
        Valor:
        <input type="text"  value="<?php echo $linha["valor"] ?>"><br><br>
    </form>
    <br><br><br>

<?php

}

?>

<a href="../view/telamenu.php">Voltar</a>


</body>
</html>