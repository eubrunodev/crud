<?php
include_once '../public/dependencias.php'
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>

    <?php
        include "../model/conexao.php";
        $id = $_GET['id'] ?? '';

        $sql = "SELECT * FROM clientes WHERE cod_pessoa = $id";

        $dados = mysqli_query($conn, $sql);
        $linha = mysqli_fetch_assoc($dados);
    ?>

    <main>
      <div class="form-confirmar">
        <h1>Confirme a ação a seguir:</h1>
        <form action='../script/delete_script.php?id=<?php echo $id;?>' method="POST">
            <div class="form-group">
              <label for="nome" class="form-label">Deseja realmente excluir o Cliente:</label>
              <input type="text" class="form-control" name="nome" value="<?php echo $linha['nome'] ?>" disabled>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-success btn-lg" value="Sim, desejo excluír">
            </div>
          </form>

          <form action="../views/customer_search.php">
            <div class="form-group">
              <input type="submit" class="btn btn-danger btn-lg" value="Cancelar">
            </div>
          </form>
      </div>
    </main>
  </body>
</html>