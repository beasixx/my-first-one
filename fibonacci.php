<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
</head>
<body>
    <h2>Gerador da Sequência de Fibonacci</h2>
    <form method="post">
        <label for="numero">Informe um número \( n \) para gerar os primeiros \( n \) termos da sequência de Fibonacci:</label>
        <input type="number" name="numero" id="numero" min="1" required>
        <button type="submit">Gerar Sequência</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['numero'])) {
            $n = intval($_POST['numero']); 
            if ($n >= 1) {
                $fibonacci = [0, 1];

                for ($i = 2; $i < $n; $i++) {
                    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
                }

                echo "<p>Os primeiros $n termos da sequência de Fibonacci são:</p>";
                echo "<ul>";
                for ($i = 0; $i < $n; $i++) {
                    echo "<li>" . $fibonacci[$i] . "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p style='color: red;'>Erro: O número deve ser maior ou igual a 1.</p>";
            }
        } else {
            echo "<p style='color: red;'>Erro: Nenhum número foi informado.</p>";
        }
    }
    ?>
</body>
</html>
