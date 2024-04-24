
<?php

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    include_once('../factory/conexao.php');
    $query = "select * from tbcliente where email = '$email' and senha = '$senha'";
    $execute = mysqli_query($conn, $query);

    if(mysqli_num_rows($execute) < 1){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../view/telalogin.php');
    }else{
        header('Location: ../view/system.php');
    }
}

?>