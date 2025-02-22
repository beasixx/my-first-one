<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Impar</title>
</head>
<body>
   
    <h3><strong><center>PAR OU IMPAR?</center></strong></h3>
    <form action="" method="get"> Digite um número:  <input type="number" name="number" /><br />
    <input type="submit" name="btnTestar" value="Testar" />
   
    <?php
   
     $numero = $_GET['number'];
   
     if($numero % 2 == 0)
      echo "$numero é um número par";
     else
      echo "$numero é um número ímpar";
 
     ?>
</body>
</html>