<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Saída</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .conteudo {
            text-align: center;
        }

        .botao {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CBB17;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .botao:hover {
            background-color: #008000;
        }
    </style>
</head>
<body>
    <div class="conteudo">
        <h1>Você saiu da página</h1>
        <a href="Login.php" class="botao">Voltar à tela de login</a>
    </div>
</body>
</html>