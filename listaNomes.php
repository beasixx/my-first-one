<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Nomes</title>
</head>
<body>
    <h2>Informe os nomes separados por vírgulas:</h2>
    <form method="post">
        <label for="nomes">Nomes:</label>
        <input type="text" name="nomes" id="nomes" required>
        <button type="submit">Exibir Lista</button>
    </form>

    <?php
    $resultado = ""; 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (isset($_POST['nomes'])) {
            $nomes = $_POST['nomes']; 
            $nomesArray = explode(',', $nomes);

            $nomesArray = array_map('trim', $nomesArray);

            if (!empty($nomesArray[0])) {
                $resultado = "<ol>"; 
                foreach ($nomesArray as $nome) {
                    $resultado .= "<li>" . htmlspecialchars($nome) . "</li>";
                }
                $resultado .= "</ol>"; 
            } else {
                $resultado = "Por favor, informe pelo menos um nome.";
            }
        } else {
            $resultado = "Nenhum nome foi enviado.";
        }
    }
    ?>

    <div id="resultado">
        <?php echo $resultado; ?>
    </div>
</body>
</html>