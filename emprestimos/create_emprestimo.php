<?php

include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fk_livro = $_POST['fk_livro'];
    $fk_leitor = $_POST['fk_leitor'];
    $data_emprestimo = $_POST['data_emprestimo'];
    $data_devolucao = $_POST['data_devolucao'];

    $sql = " INSERT INTO emprestimos (fk_livro, fk_leitor, data_emprestimo, data_devolucao) VALUE ('$fk_livro', '$fk_leitor', '$data_emprestimo', '$data_devolucao')";

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
    <title>Cadastro de Emprestimos</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>

    <form method="POST" action="create_emprestimo.php">

        <label for="fk_livro">FK do Livro:</label>
        <input type="text" name="fk_livro" required>

        <label for="fk_leitor">FK do Leitor:</label>
        <input type="text" name="fk_leitor" required>

        <label for="data_emprestimo">Data de Emprestimo:</label>
        <input type="date" name="data_emprestimo" required>

        <label for="data_devolucao">Data de Devolução:</label>
        <input type="date" name="data_devolucao" required>

        <input type="submit" value="Adicionar">

    </form>

    <a href="read_emprestimo.php">Ver registros.</a>

</body>

</html>