<?php
    require_once('../conexao/banco.php');

    //Pegando as informações do form
    $nome = $_REQUEST['serv_nome'];
    $preco = $_REQUEST['serv_preco'];
    $descricao = $_REQUEST['serv_descricao'];


    $sql = "INSERT INTO servicos (serv_nome, serv_preco, serv_descricao) VALUES ('$nome', '$preco', '$descricao')";
    mysqli_query($conn, $sql);

    header('Location: ../index.html');   

?>