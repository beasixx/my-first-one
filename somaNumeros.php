<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de números</title>
</head>
<body>
    <h2>Informe um número: </h2>
    <form method="post">
        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero" min="1" required>
        <button type="submit">Calcular Soma</button>
    </form>

    <?php
    $resultado = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = isset($_POST['numero']) ? intval($_POST['numero']) : 0;
        if ($numero > 0) {
            $soma = 0;
            $i = 1;
            while ($i <= $numero) {
                $soma += $i;
                $i++;
            }
            $resultado = "A soma de 1 até $numero é: $soma";
        } else {
            $resultado = "Por favor, informe um número positivo.";
        }
    }
    ?>

    <?php if (!empty($resultado)): ?>
        <h3><?php echo $resultado; ?></h3>
    <?php endif; ?>
</body>
</html>