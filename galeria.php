<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Galeria - Rodrigo Artes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .galeria {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }
        .quadro {
            background: #fff;
            border: 2px solid #ccc;
            border-radius: 10px;
            width: 280px;
            text-align: center;
            padding: 10px;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
        }
        .quadro img {
            width: 100%;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <header>
        <h1>🖼️ Galeria - Rodrigo Diguinho Artes</h1>
        <nav>
            <a href="index.php">🏠 Home</a> |
            <a href="galeria.php">🖼️ Galeria</a> |
            <a href="cadastrar.php">📝 Cadastrar</a> |
            <a href="entrar.php">🔑 Entrar</a>
        </nav>
    </header>

    <main>
        <h2 style="text-align:center; margin-top:20px;">Artes em Destaque</h2>
        <div class="galeria">
            <!-- Aqui está o quadro Bob Marley -->
            <div class="quadro">
                <img src="imagens/quadrobobmarleycommoldura.png" alt="Quadro Bob Marley">
                <p><b>Quadro Bob Marley</b></p>
            </div>
        </div>
    </main>
</body>
</html>
