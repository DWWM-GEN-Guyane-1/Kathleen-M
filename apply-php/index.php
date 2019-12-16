<!-- Intégration PHP -->
<?php

?>

<!-- Intégration HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP intra-HTML</title>
</head>
<body>
<h1> Test PHP intra-HTML </h1>

<!-- Intégration PHP² -->
<?php
            echo 'Hello World <br>'; //Ceci est un commentaire PHP
            
            /*Affiche
              "Bonjour le Monde
            */
            echo "Bonjour le Monde"; 
    ?>
<!-- Reste du HTML -->
   <p>Je suis actuellement entrain de tester l'intégration du langage PHP dans une fichier HTML</p> 
</body>
</html>