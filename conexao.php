
<?php
    $host = "localhost";
    $user = "root";
    $pass = "alunos";

    $banco = "categoriaproduto";

    $conn = new mysqli($host, $user, $pass, $banco);
    if($conn->connect_error)
    {
        die("falha na conexão: " .$conn->connect_error);
    }
?>