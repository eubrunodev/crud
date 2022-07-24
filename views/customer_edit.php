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
        include "../model/conexao.php";
        $id = $_GET['id'] ?? '';

        $sql = "SELECT * FROM clientes WHERE cod_pessoa = $id";

        $dados = mysqli_query($conn, $sql);
        $linha = mysqli_fetch_assoc($dados);
    ?>


    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Alteração do Cadastro</h1>
                <form action='../script/edit_script.php?id=<?php echo $id;?>' method='POST'>
                <div class="form-group">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome']; ?>">
                </div>
                <div class="form-group">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input type="text" class="form-control" name="endereco" required value = "<?php echo $linha['endereco']; ?>">
                </div>
                <div class="form-group">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" name="telefone" required value="<?php echo $linha['telefone']; ?>">
                </div>
                 <div class="form-group">
                    <label for="data_nascimento" class="form-label">Dt. Nascimento</label>
                    <input type="date" class="form-control" name="data_nascimento" required value="<?php echo $linha['data_nascimento']; ?>">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" required value="<?php echo $linha['email']; ?>">
                </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Salvar Alterações">
                    </div>

                </form>
                <a href="../index.php" class="btn btn-info">Voltar para o Inicio</a>
            </div>
        </div>
    </div>
  </body>
</html>