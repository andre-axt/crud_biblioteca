<?php

include '../db.php';

$sql = "SELECT titulo, genero, ano_publicacao, fk_autor FROM livros;";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo '<div class="livros-container">';
    while($row = $result->fetch_assoc()) {
        echo '<div class="livros-box">';
        echo '
        <h1>' . htmlspecialchars($row["titulo"]) . '</h1>
        <div class="flex">
            <div class="secaoBranca">
                <h1>Gênero: ' . htmlspecialchars($row["genero"]) . '</h1>
                <h1>Ano de Publicação: ' . htmlspecialchars($row["ano_publicacao"]) . '</h1>
                
            </div>
        </div>
        ';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "Nenhum livro encontrado.";
}

?>