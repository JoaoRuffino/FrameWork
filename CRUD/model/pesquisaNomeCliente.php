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

    $pesqnome = $_POST['cxpesquisacliente'];

    $consultar = "select * from tbcliente where nome like '%$pesqnome%'";
    $executar = mysqli_query($conn, $consultar);

    $linha = mysqli_fetch_array($executar);

    

    ?>



    <form>
        Nome:
        <input type="text" name="cxnome" value="<?php echo $linha["nome"] ?>"><br><br>
        E-mail:
        <input type="text" name="cxemail" value="<?php echo $linha["email"] ?>" ><br><br>
    </form>



    <a href="../view/telamenu.php">Voltar</a>


</body>
</html>