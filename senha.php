<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senha Aleatória</title>
</head>
<body>
    <h2>Gerador de Senha Aleatória</h2>
    <form method="post">
        <label for="tamanho">Escolha o tamanho da senha (entre 6 e 12):</label>
        <input type="number" name="tamanho" id="tamanho" min="6" max="12" required>
        <button type="submit">Gerar Senha</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['tamanho'])) {
            $tamanho = intval($_POST['tamanho']); 

            if ($tamanho >= 6 && $tamanho <= 12) {
                $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

                $senhaAleatoria = '';
                for ($i = 0; $i < $tamanho; $i++) {
                    $senhaAleatoria .= $caracteres[rand(0, strlen($caracteres) - 1)];
                }

                $senhaAleatoria = str_shuffle($senhaAleatoria);

                echo "<p>Sua senha aleatória com $tamanho caracteres é: <strong>$senhaAleatoria</strong></p>";
            } else {
                echo "<p style='color: red;'>Erro: O tamanho deve ser entre 6 e 12.</p>";
            }
        } else {
            echo "<p style='color: red;'>Erro: Tamanho não informado.</p>";
        }
    }
    ?>
</body>
</html>
