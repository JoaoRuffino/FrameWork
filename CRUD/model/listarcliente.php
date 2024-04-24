<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/listarcliente.css">
    <title>Listar Clientes</title>
</head>
<body>
    <?php 
    include_once "../factory/conexao.php";
    $consultar = "select * from tbcliente";
    $executar = mysqli_query($conn, $consultar);

    while($linha = mysqli_fetch_array($executar)){

    

    ?>



    <form>
        Nome:
        <input type="text" name="cxnome" value="<?php echo $linha["nome"] ?>"><br><br>
        E-mail:
        <input type="text" name="cxemail" value="<?php echo $linha["email"] ?>" ><br><br>

        
        <a href="excluircliente.php?id=<?php echo $linha['cod']; ?>">Excluir</a><br><br>
    </form>

<?php

}

?>

<a href="../view/telamenu.php">Voltar</a>


</body>
</html>