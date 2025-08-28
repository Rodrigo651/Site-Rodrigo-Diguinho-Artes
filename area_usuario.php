<?php
session_start();

// Proteção: só entra se estiver logado
if (!isset($_SESSION['id'])) {
    header("Location: entrar.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel do Usuário - Rodrigo Artes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        header {
            background: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }
        nav {
            background: #444;
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 5px;
        }
        nav a:hover {
            background: #666;
        }
        main {
            padding: 20px;
        }
        .aba {
            display: none;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }
        .aba.ativa {
            display: block;
        }
        h2 {
            margin-top: 0;
        }
        .btn-sair {
            background: red;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-sair:hover {
            background: darkred;
        }
    </style>
    <script>
        function abrirAba(id) {
            let abas = document.querySelectorAll(".aba");
            abas.forEach(a => a.classList.remove("ativa"));
            document.getElementById(id).classList.add("ativa");
        }
    </script>
</head>
<body>
    <header>
        <h1>Painel de <?php echo $_SESSION['nome']; ?></h1>
    </header>

    <nav>
        <a href="#" onclick="abrirAba('perfil')">👤 Perfil</a>
        <a href="#" onclick="abrirAba('config')">⚙️ Configurações</a>
        <a href="#" onclick="abrirAba('artes')">🎨 Minhas Artes</a>
        <a href="logout.php">🚪 Sair</a>
    </nav>

    <main>
        <!-- Aba Perfil -->
        <div class="aba ativa" id="perfil">
            <h2>👤 Meu Perfil</h2>
            <p><b>ID:</b> <?php echo $_SESSION['id']; ?></p>
            <p><b>Nome:</b> <?php echo $_SESSION['nome']; ?></p>
            <p><b>Email:</b> <?php echo $_SESSION['email']; ?></p>
        </div>

        <!-- Aba Configurações -->
        <div class="aba" id="config">
            <h2>⚙️ Configurações</h2>
            <form action="atualizar_usuario.php" method="POST">
                <label>Nome:</label><br>
                <input type="text" name="nome" value="<?php echo $_SESSION['nome']; ?>"><br><br>

                <label>Nova Senha:</label><br>
                <input type="password" name="senha"><br><br>

                <button type="submit">Salvar Alterações</button>
            </form>
        </div>

        <!-- Aba Minhas Artes -->
        <div class="aba" id="artes">
            <h2>🎨 Minhas Artes</h2>
            <p>Aqui futuramente você poderá enviar e listar suas artes.</p>
        </div>
    </main>
</body>
</html>


