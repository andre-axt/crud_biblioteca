<?php

include '../db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $ano_publicacao = $_POST['ano_publicacao'];
    $fk_autor = $_POST['fk_autor'];

    $sql = "UPDATE livros SET titulo ='$titulo',genero ='$genero', ano_publicacao = '$ano_publicacao' WHERE id_livro=$id";

    if ($conn->query($sql) === true) {
        echo "Registro atualizado com sucesso.
        <a href='read_livro.php'>Ver registros.</a>
        ";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
    exit(); 
}

$sql = "SELECT * FROM livro WHERE id_livro=$id";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();


?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>

<body>

    <form method="POST" action="update_livro.php?id=<?php echo $row['id'];?>">

        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" value="<?php echo $row['titulo'];?>" required>

        <label for="genero">genero:</label>
        <input type="text" name="genero" value="<?php echo $row['genero'];?>" required>

        <label for="ano_publicacao">Ano de Publicação:</label>
        <input type="text" name="ano_publicacao" value="<?php echo $row['ano_publicacao'];?>" required>

        <input type="submit" value="Atualizar">

    </form>

    <a href="read_livro.php">Ver registros.</a>

</body>

</html>