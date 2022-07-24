<?php
    // dados do sem banco de dados
    $servidor = "localhost";
    $user = "root";
    $password = "";
    $db = "cadastro";

    if(mysqli_connect($servidor, $user, $password, $db)){
        $conn = mysqli_connect($servidor, $user, $password, $db);
    }

    function mensagem($texto, $tipo){
        echo "<div class='alert alert-$tipo' role='alert'>
                $texto
            </div>";
    }

    // formatação da data de nascimento
    function mostra_data($data){
        $d = explode("-", $data);    // replace
        $escreve = $d[2] . "/" . $d[1] . "/" . $d[0];
        return $escreve;
    }
    function phone_format($phone) {
       $fone = substr($phone, 0, 2);
       $fone_2 = substr($phone, 2, 5);
       $fone_3 = substr($phone, 7, 8);

       $telefone = "(".$fone.") $fone_2-$fone_3";
       return  $telefone;
    }
?>
