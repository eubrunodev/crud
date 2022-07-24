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

    <div class="container">
        <div class="row">
            <?php
                include "../model/conexao.php";
                $id = $_GET['id'];
                $nome = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $telefone = $_POST['telefone'];
                $data_nascimento = $_POST['data_nascimento'];
                $email = $_POST['email'];

                $sql = "UPDATE `clientes` SET nome = '$nome', endereco = '$endereco', telefone = '$telefone', data_nascimento = '$data_nascimento', email = '$email' WHERE cod_pessoa = $id";
            ?>
            <?php if (mysqli_query($conn, $sql)): ?>
                  <script>
                    alert('Alterações salvas.');
                    window.location.replace("../views/customer_search.php");
                 </script>
            <?php endif; ?>
        </div>
    </div>
  </body>
</html>