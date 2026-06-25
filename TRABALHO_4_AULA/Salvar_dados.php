<?php

//conexao php
$servername = "localhost";
$username = "root";
$password = "alexcom34";
$dbname = "sesi_projeto";

$conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }



//Função onde pega os dados enviados e os salva 
    if (isset($_POST['velocidade']) && isset($_POST['rpm'])) {
      $velocidade = $_POST['velocidade'];
        $rpm = $_POST['rpm'];


          $sql = "insert into borlai (velocidade, rpm) values ('$velocidade', '$rpm')";

    }

//Função que fecha o código    
mysqli_query($conn, $sql);


mysqli_close($conn);
?>