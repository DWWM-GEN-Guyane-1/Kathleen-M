<!-- Créer une variable age et l'initialiser avec une valeur.
Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo1-php</title>
</head>
<body>
<?php
$age=1;
$ofage=18;

if ($age>=$ofage)
{
echo "Vous êtes majeur.";
}

else
{
    echo "Vous êtes mineur."; 
    }
?>
</body>
</html>