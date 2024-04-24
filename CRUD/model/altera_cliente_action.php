<?php
include_once '../factory/conexao.php';

if(isset($_POST['btnalterar'])){
    $nome = $_POST['txtnome'];
    $email = $_POST['txtemail'];
    $senha = $_POST['txtsenha'];
    $cod = $_POST['txtcod'];


    $query = "UPDATE tbcliente SET email = '$email', senha = '$senha', nome = '$nome' WHERE cod = '$cod'"; 
    $execute = mysqli_query($conn, $query);


    echo "<div ><br>";
    echo "<b>Nome       = </b>$nome<br>
    <b>Email       = </b>$email<br>
    <b>Senha      = </b>$senha<br>";
    echo "</div>";

    echo "<a href='listarcliente.php' class='btn'>Listagem de Clientes</a>";
}else {
    echo "erro";
}
?>