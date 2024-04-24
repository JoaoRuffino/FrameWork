<?php

    include_once "../factory/conexao.php";

    if($_POST['cxproduto'] != ""){
        $produto = $_POST['cxproduto'];
        $datavalidade = $_POST['cxdata'];
        $quantidade = $_POST['cxquantidade'];
        $valor = $_POST['cxvalor'];

        $sql = "insert into produto(nome, datavalidade, qtd, valor) values ('$produto', '$datavalidade', '$quantidade', '$valor')";

        $query = mysqli_query($conn, $sql);

        echo "Dados cadastrados com sucesso";
    }else{
        echo "Dados não encontrados!!";
    }

?>

<a href="../view/telamenu.php">Voltar</a>
