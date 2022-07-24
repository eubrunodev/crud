<?php
include_once '../public/dependencias.php'
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

            <?php
                include '../model/conexao.php';

                $nome = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $telefone = $_POST['telefone'];
                $data_nascimento = $_POST['data_nascimento'];
                $email = $_POST['email'];


                $sql = "INSERT INTO `clientes`
                (`nome`, `endereco`, `telefone`, `email`, `data_nascimento`) VALUES ('$nome','$endereco','$telefone','$email','$data_nascimento')";
                ?>
                
                <?php if (mysqli_query($conn, $sql)): ?>
                  <script>
                    alert('Cliente salvo, com sucesso.');
                    window.location.replace("../views/customer_search.php");
                 </script>
                <?php endif; ?>
  </body>
</html>