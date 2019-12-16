<!-- Créer 3 variables.  
Dans la première mettre le résultat de l'opération **3 + 4**.  
Dans la deuxième mettre le résultat de l'opération **5 * 20**.  
Dans la troisième mettre le résultat de l'opération **45 / 5**.  
Afficher le contenu des variables. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo8-php</title>
</head>
<body>
<?php
    $var1=3;
    $var2=4;
    $var3=5;
    $var4=20;
    $var5=45;
    $var6=5;
$addition= $var1+$var2;
$multiplication=$var3*$var4;
$division=$var5/$var6;

echo $addition; 
echo "<br>";
echo $multiplication;
echo "<br>";
echo $division;


?>
</body>
</html>