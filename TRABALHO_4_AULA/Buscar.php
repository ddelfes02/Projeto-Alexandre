<?php

//conexao com o banco de dados
$servername = "localhost";
$username = "root";
$password = "alexcom34";
$dbname = "sesi_projeto";

$conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }


//função que pega os dados do banco e envia para o html     
$sql = "SELECT `velocidade`, `rpm` FROM `borlai` ORDER BY `id` DESC LIMIT 1";  
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();

echo json_encode([
  "velocidade" => $row["velocidade"],
    "rpm" => $row["rpm"]
]);
    }   

//Função que fecha o código
mysqli_close($conn);
?>