<?php
session_start();
include("conexao.php");

// Verifica login
if (!isset($_SESSION['id'])) {
    header("Location: entrar.php");
    exit;
}

$id = $_SESSION['id'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];

// Atualiza nome
if (!empty($nome)) {
    $sql = "UPDATE usuarios SET nome=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $nome, $id);
    $stmt->execute();
    $_SESSION['nome'] = $nome; // atualiza sessão
}

// Atualiza senha se preenchida
if (!empty($senha)) {
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    $sql = "UPDATE usuarios SET senha=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $senhaHash, $id);
    $stmt->execute();
}

echo "<script>alert('Dados atualizados com sucesso!'); window.location='area_usuario.php';</script>";
?>
