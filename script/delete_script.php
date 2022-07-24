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

                $sql = "DELETE FROM `clientes` WHERE cod_pessoa = $id";
                ?>
                 <?php if (mysqli_query($conn, $sql)): ?>
                  <script>
                    alert('Cliente removido, com sucesso.');
                    window.location.replace("../views/customer_search.php");
                 </script>
                <?php endif; ?>
        </div>
    </div>
  </body>
</html>