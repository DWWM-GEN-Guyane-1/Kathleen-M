<!-- Créer deux variables age et gender. La variable gender peut prendre comme valeur :

    Homme
    Femme

En fonction de l'âge et du genre afficher la phrase correspondante :

    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur

Gérer tous les cas. -->

<!-- Créer une variable age et l'initialiser avec une valeur.
Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo3-php</title>
</head>
<body>
<?php
$gender="wo-man"
$age=1;
$ofage=18;

if($gender === "Homme" && $age >= $majority){
    echo "Vous êtes une Femme majeure";
}

elseif($gender === "Homme" && $age >= $majority){
    echo "Vous êtes un Homme majeur";
}
elseif($gender === "Femme" && $age < $majority){
    echo "Vous êtes une Femme mineure";
}
elseif($gender === "Homme" && $age < $majority){
    echo "Vous êtes un Homme mineur";
}

?>
</body>
</html>