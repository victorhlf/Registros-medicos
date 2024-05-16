<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, Open Sans;
        }
        .container {
            background-color: #f2f2f2;
            padding: 10px;
            border-radius: 10px;
        }
        h1 {
            text-align: center;
        }
        form {
            width: 400px;
            margin: 0 auto;
            text-align: center;
            font-weight: italic;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input {
            width: 90%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button, .botao {
            width: 40%;
            padding: 10px;
            border: 1px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button[type="submit"] {
            background-color:  #4CBB17;
            color: white;
        }
        .botao {
            display: inline-block;
            text-decoration: none;
            background-color: #4CBB17;
            color: white;
            margin-right: 10px;
        }
        .botao:hover {
            background-color: #008000;
        }
        button[type="submit"]:hover {
            background-color: #008000;
        }
        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Portal do Paciente</h1>
    <form action="Home.php" method="post">
        <label for="login">Usuário</label><br>
        <input type="text" id="login" name="login"><br>
        <label for="senha">Senha</label><br>
        <input type="password" id="senha" name="senha"><br>
        <button type="submit">Entrar</button>
        <a href="DadosCadastrais.php" class="botao">Realizar Cadastro</a><br>
        <a href="Logout.php" class="botao">Sair</a>

    </form>
</div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        if (!empty($login) && !empty($senha)) {

            header("Location: Home.php");
            exit();
        } else {
            echo "<p class='error-message'>Por favor, preencha todos os campos.</p>";
        }

    }
    ?>
</body>
</html>
