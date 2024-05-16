<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            display: flex;
            flex-direction: column;
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

        .perfil {
            display: flex;
            align-items: center;
        }

        img {
            border-radius: 50%;
        }

        .dados {
            margin-left: 20px;
        }

        .dados p {
            margin: 5px 0;
        }

        .botao {
            display: block;
            margin-top: 20px;
            padding: 10px 20px;
            width: 200px; /* largura fixa */
            height: 40px; /* altura fixa */
            background-color: #4CBB17;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            text-align: center;
        }

        .botao:hover {
            background-color: #008000;
        }
    </style>
</head>
<body>
    <h1>ParaceltusServidor</h1>
    <div class="perfil">
        <img src="Profile.jpg" alt="Minha Imagem" width="100" height="100">
        <div class="dados">
            <?php
                echo "<p><strong>Nome:</strong> ParaceltusServidor</p>";
                echo "<p><strong>Idade:</strong> 30 anos</p>";
                echo "<p><strong>Email:</strong> paraceltus@exemplo.com</p>";
            ?>
        </div>
    </div>
    <a href="Exames.php" class="botao">Exames</a>
    <a href="ConsultasAgendadas.php" class="botao">Consultas Agendadas</a>
    <a href="Logout.php" class="botao">Sair</a>
</body>
</html>
