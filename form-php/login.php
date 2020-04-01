<?php
session_start();
$titre="Connexion";
include("includes/identifiants.php");
include("includes/debut.php");
include("includes/menu.php");
echo '<p><i>Vous êtes ici</i> : <a href="./index.php">Accueil</a> --> Connexion';

if ($id!=0) erreur(ERR_IS_CO);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire PHP</title>

     <!-- Bootstrap CDN -->
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css" media="screen" type="text/css">
</head>

<body id="bodyformindex">
    <!-- Formulaire -->
    <div class="container d-flex justify-content-center">
    <div id="jumboform" class="jumbotron">
    <h1 class="display-4 text-center">Petit.e coquin.e...</h1> 
    <p class="lead text-center">T'en veux encore hein ? </p>
    <form name="formulaire" method="post" action="welcome.php">

  <div class="form-group">
    <label for="input">Pseudonyme</label>
    <input name="pseudo" type="pseudo" type="text" class="form-control" id="pseudo" placeholder="Votre pseudonyme" required> 
  </div>
 
  <div class="form-group">
    <label for="input">Mot de passe</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="Votre mot de passe" required>
  </div>

 <div class="row justify-content-center">
  <button type="submit" class="btn btn-dark txt-white btn-lg">Connexion</button>
</div>
</form>
</div>
</div>

    </form>
</body>

</html>