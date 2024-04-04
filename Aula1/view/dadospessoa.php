<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include_once "../control/pessoa.php";
    ?>
</head>
<body>
    <?php
        $dados = new Pessoa("Robert", "robert@gmail.com", 20, "11989786756");
        //new = instanciar
        //dados => vai ser um objeto
        echo $dados->getNome();
    ?>
</body>
</html>