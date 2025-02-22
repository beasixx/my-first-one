<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
</head>
<body>
<form action="" method="get"> Insira sua idade:<input type="number" name="age" /><br />
<input type="submit" name="btnEnviar" value="Enviar" />
 
<?php
 
$idade = $_GET ['age'];
 
if ($idade <= 18){
    echo "$idade anos, você é menor de idade!"; 
 
    } else {
        ($idade >= 18);
        echo "$idade anos, você é maior de idade!";
    }
 
?>
</body>
</html>