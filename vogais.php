<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Vogais</title>
</head>
<body>
    <h2>Contador de Vogais</h2>
    <form method="post">
        <label for="palavra">Digite uma palavra:</label>
        <input type="text" name="palavra" id="palavra" required>
        <button type="submit">Contar Vogais</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['palavra'])) {
            $palavra = $_POST['palavra']; 

            $palavra = strtolower($palavra);

            $padrao = '/[aeiouáéíóúâêîôûãõàèìòùäëïöü]/';
            preg_match_all($padrao, $palavra, $matches);

            $contador = count($matches[0]);

            echo "<p>A palavra <strong>'$palavra'</strong> contém <strong>$contador</strong> vogais.</p>";
        } else {
            echo "<p>Nenhuma palavra foi enviada.</p>";
        }
    }
    ?>
</body>
</html>