<?php
    require_once('../conexao/banco.php');

    //Pegando as informações do form
    $nome = $_REQUEST['log_user'];
    $email = $_REQUEST['log_email'];
    $senha = $_REQUEST['log_senha'];

    
    $sql = "INSERT INTO login (log_user, log_email, log_senha) VALUES ('$nome', '$email', '$senha')";
    mysqli_query($conn, $sql);

    header('Location: ../index.html');

?>