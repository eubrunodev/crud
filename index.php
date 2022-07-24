<?php
include_once './public/dependencias.php'
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
  <header>
        <nav class="navbar">
            <a href="#"><img class="logo" src="./img/logo.png" alt="logo" title="logo"></a>
            <ul id="menu-s">
                <li><a href="#" style="background-color: white; color: black;text-decoration: underline;">Início</a></li>
                <li><a href="./views/customer_register.php">Cadastrar</a></li>
                <li><a href="./views/customer_search.php">Pesquisar</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container-home">
            <h1 class="display-4" style="text-align: center">Bem-Vindo</h1>

            <p class="lead" style="text-align: center">Sistema de CRM feito em PHP<br>Desenvolvido por: <strong style="color: red;"><a href="https://github.com/eubrunodev" target="_blank">eubrunodev</a></strong></p>
            <hr class="my-4">
            
            <div class="container-escolha">
                <p>Escolha uma opção:</p>

                <a class="btn-menu" href="./views/customer_register.php" role="button">Cadastrar</a>
                <a class="btn-menu" href="./views/customer_search.php" role="button"> Pesquisar</a>
            </div>
        </div>
    </main>
    <footer>
        <p>Todos os direitos Reservados &reg; 2022<br> <a href="https://github.com/eubrunodev" target="_blank">eubrunodev</a></p>
    </footer>
  </body>
</html>