<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>

    <?php
    $usuarioPredefinido = "admin";
    $senhaPredefinidaHash = password_hash("senha123", PASSWORD_DEFAULT); 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['usuario']) && isset($_POST['senha'])) {
            $usuario = htmlspecialchars($_POST['usuario']);
            $senha = htmlspecialchars($_POST['senha']);

            if ($usuario === $usuarioPredefinido && password_verify($senha, $senhaPredefinidaHash)) {
                echo "<p style='color: green;'>Login bem-sucedido! Bem-vindo, $usuario.</p>";
            } else {
                echo "<p style='color: red;'>Erro: Usuário ou senha incorretos.</p>";
            }
        } else {
            echo "<p style='color: red;'>Erro: Todos os campos são obrigatórios.</p>";
        }
    }
    ?>
</body>
</html>