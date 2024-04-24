<?php

include_once '../factory/conexao.php';
$cod=$_GET["id"];

$consultar = "select * from tbcliente where cod = '$cod'";
$executar = mysqli_query($conn, $consultar);
$linha = mysqli_fetch_array($executar)
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/listarcliente.css">

    <title>Alteração de Usuário</title>
</head>
<body>
<div class="">
   <div class="">
      <h3 class="">Alterando clientes</h3>
      <?php echo "Cliente: {$linha['cod']}"; ?>

      <form action="altera_cliente_action.php" method="POST">
        
        <input type="hidden" name="txtcod" value="<?php echo "{$linha['cod']}"?>">
        
         <div class="">
            <label for="nome">Nome: </label><br>
            <input type="text" name="txtnome" id="nome" value="<?php echo "{$linha['nome']}"; ?>">
         </div>
         <div class="">
            <label for="email">Email: </label><br>
            <input type="text" name="txtemail" id="email" value="<?php echo "{$linha['email']}"; ?>">
         </div>

         <div class="">
            <label for="senha">Senha: </label><br>
            <input type="text" name="txtsenha" id="senha" value="<?php echo "{$linha['senha']}"; ?>">
         </div>
         
         <button type="submit" class="" name="btnalterar">Alterar </button>
         <input type="submit" class="inputSubmit" name="submit" value="Enviar">
      </form>


   </div>
<div>
</body>
</html>