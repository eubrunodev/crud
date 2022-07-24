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
  <style>
    h1{
        margin-right: 350px;
    }
    input[type='submit']{
        width: 100%;
        cursor: pointer;
        background-color: #22bf2a;
        border: none;
        padding: 20px;
        border-radius: 15px;
        color: white;
        box-shadow: 1px 2px 1px black;
    }
    input[type='submit']:hover{
        color: black;
        background-color: #28a745;
        box-shadow: 8px 2px 8px black;
        border-style: none;
    }
  </style>
  <body>
  <header>
        <nav class="navbar">
        <a href="../index.php"><img class="logo" src="../img/logo.png" alt="logo" title="logo"></a>
            <ul id="menu-s">
            <li><a href="../index.php">Início</a></li>
            <li><a href="#" style="background-color: white; color: black; text-decoration: underline;">Cadastrar</a></li>
            <li><a href="customer_search.php">Pesquisar</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="../script/register_script.php" method="POST">
                        <h1 style="margin-top: 20px; text-align: center;"><i class="fa fa-users"></i> Cadastro de Clientes</h1>
                        <div class="form-group">
                            <label for="nome" class="form-label">Nome Completo:</label>
                            <input type="text" class="form-control" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="endereco" class="form-label">Endereço:</label>
                            <input type="text" class="form-control" name="endereco" required>
                        </div>
                        <div class="form-group">
                            <label for="telefone" class="form-label">Telefone:</label>
                            <input type="text" class="form-control" name="telefone" required>
                        </div>
                        <div class="form-group">
                            <label for="data_nascimento" class="form-label">Dt. Nascimento:</label>
                            <input type="date" class="form-control" name="data_nascimento" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Cadastrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p>Todos os direitos Reservados &reg; 2022<br> <a href="https://github.com/eubrunodev" target="_blank">eubrunodev</a></p>
    </footer>
  </body>
</html>