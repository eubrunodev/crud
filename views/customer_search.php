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
        include '../model/conexao.php';

        if(isset($_POST['busca'])){
            $pesquisa = $_POST['busca'];
        } else {
            $pesquisa = '';
        }

        $sql = "SELECT * FROM clientes WHERE nome LIKE '%$pesquisa%'";
        $dados = mysqli_query($conn, $sql);

    ?>
    
    <header>
        <nav class="navbar">
        <a href="../index.php"><img class="logo" src="../img/logo.png" alt="logo" title="logo"></a>
            <ul id="menu-s">
                <li><a href="../index.php">Início</a></li>
                <li><a href="customer_register.php">Cadastrar</a></li>
                <li><a href="#" style="background-color: white; color: black;text-decoration: underline;">Pesquisar</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                        <table class="table table-hover">
                            <thead>
                            <h2 class="table-h2">CLIENTES CADASTRADOS</h2>
                            <form class="form-inline" action="customer_search.php" method="POST">
                                <input class="input-pesquisar" type="search" placeholder="digite um nome..." aria-label="Search" name="busca">
                                <button class="botao-pesquisar" type="submit">
                                    Buscar <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </form>
                            <tr>
                                <th scope='col'>Nome</th>
                                <th scope='col'>Endereço</th>
                                <th scope='col'>Telefone</th>
                                <th scope='col'>Dt. Nascimento</th>
                                <th scope='col'>E-mail</th>
                                <th colspan='3'>Opções</th>
                                <th><a href="customer_register.php"><i class="fa-solid fa-user-plus"></i></a></th>
                            </tr>
                            </thead>
                        <tbody>
                            <?php
                                while ($linha = mysqli_fetch_assoc($dados)) {
                                    $cod_pessoa = $linha['cod_pessoa'];
                                    $nome = $linha['nome'];
                                    $endereco = $linha['endereco'];
                                    $telefone = phone_format($linha['telefone']);
                                    $data_nascimento = $linha['data_nascimento'];
                                    $data_nascimento = mostra_data($data_nascimento);
                                    $email = $linha['email'];

                                    echo "<tr>

                                            <th scope='row'>$nome</th>
                                            <th>$endereco</th>
                                            <th>$telefone</th>
                                            <th>$data_nascimento</th>
                                            <th>$email</th>
                                            
                                            <th>
                                            <a href='customer_edit.php?id=$cod_pessoa' class='btn btn-warning btn-sm'> Editar 
                                            <i class='fa fa-user-edit'></i></a>
                                            </th>
                                            <th>
                                            <a href='customer_delete.php?id=$cod_pessoa' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma'>Excluir <i class='fa fa-user-times'></i> </a>
                                            </th>
                                        </tr>";
                                    }
                            ?>
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </main>
                            <footer>
        <p>Todos os direitos Reservados &reg; 2022<br> <a href="https://github.com/eubrunodev" target="_blank">eubrunodev</a></p>
    </footer>
  </body>
</html>