<?php
include("conexao.php");

// Receber dados do formulário
$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // senha criptografada

// Verifica se email já existe
$sql = "SELECT * FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('Este email já está cadastrado!'); window.location='cadastrar.php';</script>";
} else {
    // Inserir novo usuário
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nome, $email, $senha);

    if ($stmt->execute()) {
        echo "<script>alert('Cadastro realizado com sucesso!'); window.location='entrar.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar.'); window.location='cadastrar.php';</script>";
    }
}
?>
