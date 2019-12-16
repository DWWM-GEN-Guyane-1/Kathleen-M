<!-- Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.   -->
<!-- Les afficher. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo4-php</title>
</head>
<body>
<?php
$var = '122.34343The';
$string= "blabla";
$b=intval($string);
$float_variable=floatval($var);
$boolean_variable=boolval($string);

echo $string;
echo "<br>";
echo $b;
echo "<br>";
echo $float_variable;
echo "<br>";
echo '0: '.(boolval(0)? 'true' : 'false')."\n";
?>
</body>
</html>