<?php

include '../db.php';
$id = $_GET['id'];

$sql = " DELETE FROM emprestimos WHERE id_emprestimo=$id ";

if ($conn->query($sql) === true) {
    echo "Registro excluído com sucesso.
        <a href='read_emprestimo.php'>Ver registros.</a>
        ";
} else {
    echo "Erro " . $sql . '<br>' . $conn->error;
}
$conn -> close();
exit();