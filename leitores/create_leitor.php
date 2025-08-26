<?php

include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = " INSERT INTO leitores (nome, email, telefone) VALUE ('$nome', '$email', '$telefone')";

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
    <title>Cadastro de Leitores</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>

    <form method="POST" action="create_leitor.php">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" required>

        <input type="submit" value="Adicionar">

    </form>

    <a href="read_leitor.php">Ver registros.</a>

</body>

</html>