<?php

include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $ano_publicacao = $_POST['ano_publicacao'];
    $fk_autor = $_POST['fk_autor'];

    $sql = " INSERT INTO livros (titulo, genero, ano_publicacao, fk_autor) VALUE ('$titulo','$genero', '$ano_publicacao', '$fk_autor')";

    if ($conn->query($sql) === true) {
        echo "Novo registro criado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>

    <form method="POST" action="create.php">

        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" required>

        <label for="genero">Gênero:</label>
        <input type="text" name="genero" required>

        <label for="ano_publicacao">Ano de Publicação:</label>
        <input type="date" name="ano_nascimento" required>

        <label for="ano_publicacao">Ano de Publicação:</label>
        <input type="date" name="ano_publicacao" required>

        <label for="fk_autor">Fk do Autor:</label>
        <input type="date" name="fk_autor" required>

        <input type="submit" value="Adicionar">

    </form>

    <a href="read_livro.php">Ver registros.</a>

</body>

</html>