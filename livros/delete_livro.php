<?php

include '../db.php';
$id = $_GET['id'];

$sql = " DELETE FROM livros WHERE id_livro=$id ";

if ($conn->query($sql) === true) {
    echo "Registro excluído com sucesso.
        <a href='read_livro.php'>Ver registros.</a>
        ";
} else {
    echo "Erro " . $sql . '<br>' . $conn->error;
}
$conn -> close();
exit();