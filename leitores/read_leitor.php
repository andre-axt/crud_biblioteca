<?php

include '../db.php';

$sql = "SELECT nome, email, telefone FROM leitores;";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo '<div class="container">';
    while($row = $result->fetch_assoc()) {
        echo '<div class="leitores-box">';
        echo '
        <h1>' . htmlspecialchars($row["nome"]) . '</h1>
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
    echo "Nenhum leitor encontrado.";
}

?>