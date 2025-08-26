<?php

include '../db.php';

$sql = "SELECT * FROM emprestimo inner join livros on fk_livro = id_livro inner join leitores on fk_leitor = id_leitor;";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo '<div class="container">';
    while($row = $result->fetch_assoc()) {
        echo '<div class="emprestimo-box">';
        echo '
        <h1> Livro:' . htmlspecialchars($row["titulo"]) . '</h1>
        <div class="flex">
            <div class="secaoBranca">
                <h1>Gênero: ' . htmlspecialchars($row["genero"]) . '</h1>
                <h1>Ano de Publicação: ' . htmlspecialchars($row["ano_publicacao"]) . '</h1>
                
            </div>
        </div>
        <h1> Leitor:' . htmlspecialchars($row["nome"]) . '</h1>
        <div class="flex">
            <div class="secaoBranca">
                <h1>email: ' . htmlspecialchars($row["email"]) . '</h1>
                <h1>telefone: ' . htmlspecialchars($row["telefone"]) . '</h1>
                
            </div>
        </div>
        ';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "Nenhum meprestimo encontrado encontrado.";
}

?>