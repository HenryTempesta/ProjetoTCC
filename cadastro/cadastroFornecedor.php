<?php
    require_once('../conexao/banco.php');

    //Pegando as informações do form
    $nome = $_REQUEST['forn_nome'];
    $sobrenome = $_REQUEST['forn_sobrenome'];
    $email = $_REQUEST['forn_email'];
    $celular = $_REQUEST['forn_celular'];
    $cep = $_REQUEST['forn_cep'];
    $rua = $_REQUEST['forn_rua'];
    $endereco_numero = $_REQUEST['forn_endereco_numero'];
    $bairro = $_REQUEST['forn_bairro'];
    $cidade = $_REQUEST['forn_cidade'];
    $estado = $_REQUEST['forn_estado'];
    $descricao = $_REQUEST['forn_descricao'];

    // echo $nome, $sobrenome, $email, $celular, $cep, $rua, $endereco_numero, $bairro, $cidade, $estado, $descricao;

    $sql = "INSERT INTO fornecedor (forn_nome, forn_sobrenome, forn_email, forn_celular, forn_cep, forn_rua , forn_endereco_numero, forn_bairro, forn_cidade, forn_estado, forn_descricao) VALUES ('$nome', '$sobrenome', '$email', '$celular', '$cep', '$rua', '$endereco_numero', '$bairro', '$cidade', '$estado','$descricao')";

    mysqli_query($conn, $sql);

    echo $sql;

    // header('Location: ../cadastroTeste.html');

?>