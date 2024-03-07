<?php 

    include_once "../factory/conexao.php";

    if($_POST['cxnome'] != ""){
        $nome = $_POST['cxnome'];
        $email = $_POST['cxemail'];
        $sql = "insert into tbcliente (nome, email) values('$nome', '$email')";
        $query = mysqli_query($conn, $sql);
        echo "Dados cadastrado com sucesso";    
    }
    else{
        echo "Dados não cadastrados";
    }

?>

<a href="../index.php">Voltar</a>
