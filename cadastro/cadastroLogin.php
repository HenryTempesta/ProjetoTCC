<?php

    //Conexão com o Banco
    $servername = "localhost"; // ou o IP do servidor de banco de dados
    $username = "root"; // seu usuário de banco de dados
    $password = ""; // sua senha do banco de dados
    $dbname = "sistematcc"; // nome do seu banco de dados

    // Criando a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);    

    //Pegando as informções do form
    $nome = $_REQUEST['log_user'];
    $email = $_REQUEST['log_email'];
    $senha = $_REQUEST['log_senha'];
    

    $contadorID = 3;


    // Corrigir aspas na string SQL
    $sql = "INSERT INTO login VALUES ($contadorID, '$nome', '$email', '$senha')";
    
    echo $sql;

    // Executar a consulta
    mysqli_query($conn, $sql);

    echo $sql;

    $contadorID = $contadorID + 1;
    

?>