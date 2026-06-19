<?php
// Inconsistência: Ausência da inclusão do arquivo de conexão com o banco de dados.        CORRETO

// Inconsistência: Os parâmetros de verificação do método POST utilizam chaves genéricas.     CORRETO

// Ajuste os campos para receber os dados nominais de velocidade e rotação, a espestá enviando rpm e velocidade como nomes do campo.       CORRETO

// Implemente a instrução SQL INSERT aplicável para a persistência dos dados.     CORRETO



//conexao php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ole_ole_ole___ole_ole_ola__neymaaaar_neymaaar";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}




if (isset($_POST['velocidade']) && isset($_POST['rpm'])) {
$velocidade = $_POST['velocidade'];
$rpm = $_POST['rpm'];


$sql = "insert into Athletiba (velocidade, rpm) values ('$velocidade', '$rpm')";

}
mysqli_query($conn, $sql);


mysqli_close($conn);
?>