<?php

include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $nacionalidade = $_POST['nacionalidade'];
    $ano_nascimento = $_POST['ano_nascimento'];

    $sql = " INSERT INTO autores (nome, nacionalidade, ano_nascimento) VALUE ('$nome', '$nacionalidade', '$ano_nascimento')";

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
    <title>Cadastro de Autores</title>
</head>

<body>

    <form method="POST" action="create_autor.php">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="nacionalidade">Nacionalidade:</label>
        <input type="text" name="nacionalidade" required>

        <label for="ano_nascimento">Ano de Nascimento:</label>
        <input type="date" name="ano_nascimento" required>

        <input type="submit" value="Adicionar">

    </form>

    <a href="read_autor.php">Ver registros.</a>

</body>

</html>