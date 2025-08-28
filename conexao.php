<?php
$host = "localhost";
$user = "root";       // usuário do MySQL
$pass = "";           // senha do MySQL
$db   = "rodrigo_artes"; // nome do banco de dados

$conn = new mysqli($host, $user, $pass, $db);

// Verifica conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
