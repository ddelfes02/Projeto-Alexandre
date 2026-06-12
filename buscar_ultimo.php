<?php
// Inconsistência: Definição dos parâmetros de conexão com o banco de dados ausente.       CORRETO

// Implemente a consulta SQL para selecionar exclusivamente o registro mais recente.       CORRETO

// Inconsistência: Ajuste o mapeamento do array para estruturar o JSON com os dados corretos.      CORRETO 


include('conexao.php');

$sql = "SELECT `velocidade`, `rpm`, `id` FROM `tabela_motor` ORDER BY `id` DESC LIMIT 1";  
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();


echo json_encode([
"velocidade" => $row["velocidade"],
"rpm" => $row["rpm"],
"id" => $row["id"]
]);
}


mysqli_query($conn, $sql);
mysqli_close($conn);
?>
$conn->close();

