<?php
session_start();
include("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

// Busca usuário
$sql = "SELECT * FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();

    // Verifica senha
    if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];

          header("Location: area_usuario.php");
            exit;

        echo "<script>alert('Bem-vindo, ".$usuario['nome']."!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Senha incorreta!'); window.location='entrar.php';</script>";
    }
} else {
    echo "<script>alert('Usuário não encontrado!'); window.location='entrar.php';</script>";
}
?>
