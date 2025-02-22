<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <form action="" method="get">
        Tabuada do: <input type="number" name="numero" /><br />
        <input type="submit" name="btnBuscar" value="Buscar" />
    </form>

    <?php
    if (isset($_GET['numero'])) {
        $tabuada = $_GET['numero'];
        $count = 1;

        echo "<h2>Tabuada do $tabuada:</h2>";
        while ($count <= 10) {
            echo $tabuada . " x " . $count . " = " . ($tabuada * $count) . "<br />";
            $count++;
        }
    } else {
        echo "<p>Digite um número para calcular a tabuada.</p>";
    }
    ?>
</body>
</html>