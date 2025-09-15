<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro categoria</h1>
    <hr>
    <form action="categoriaCAD.php" method="post">
        <label for="txtCodCategoria">Codigo da categoria:</label>
        <br>
        <input type="text" name="txtCodCategoria" value="(automatico)" readonly/>
        <br>
        <label for="txtNomeCategoria">Nome da categoria: </label>
        <br>
        <input type="text" name="txtNomeCategoria" max-length="50"/>
        <br>
        <input type="submit" value="Cadastrar"/>
        &nbsp;
        <input type="reset" Value="Limpar"/>
    </form>
    <?php

    if(isset($_POST["txtNomeCategoria"]))
    {
        $nome = $_POST["txtNomeCategoria"];
        require_once("conexao.php");
        $query="INSERT INTO categoria(nomecategoria) values('$nome')";
        $resultado = mysqli_query($conn, $query);
        echo("<script>alert('categoria cadastrada !')</script>");
    }
    ?>

</body>
</html>