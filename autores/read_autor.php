<?php

include '../db.php';

$sql = "SELECT nome, nacionalidade, ano_nascimento FROM autores;";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo '<div class="container">';
    while($row = $result->fetch_assoc()) {
        echo '<div class="autores-box">';
        echo '
        <h1>' . htmlspecialchars($row["nome"]) . '</h1>
        <div class="flex">
            <div class="secaoBranca">
                <h1>Nacionalidade: ' . htmlspecialchars($row["nacionalidade"]) . '</h1>
                <h1>Ano de Nascimento: ' . htmlspecialchars($row["ano_nascimento"]) . '</h1>
                
            </div>
        </div>
        ';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "Nenhum autor encontrado.";
}

?>