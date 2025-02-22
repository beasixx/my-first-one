<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador de CPF</title>
</head>
<body>
    <h2>Validador de CPF</h2>
    <form method="post">
        <label for="cpf">Digite um CPF (somente números):</label>
        <input type="text" name="cpf" id="cpf" maxlength="11" required>
        <button type="submit">Verificar CPF</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['cpf'])) {
            $cpf = $_POST['cpf']; 
            $cpf = preg_replace('/[^0-9]/', '', $cpf);

            if (strlen($cpf) == 11) {
                echo "<p style='color: green;'>CPF válido: $cpf</p>";
            } else {
                echo "<p style='color: red;'>CPF inválido: O CPF deve conter exatamente 11 dígitos.</p>";
            }
        } else {
            echo "<p style='color: red;'>Erro: Nenhum CPF foi informado.</p>";
        }
    }
    ?>
</body>
</html>
