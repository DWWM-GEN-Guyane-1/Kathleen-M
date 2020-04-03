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

<?php
                       $servername = 'localhost';
                       $username = 'root';
                       $password = 'S1mpl0n973!';
                       
                       //On essaie de se connecter
                       try{
                           $conn = new PDO("mysql:host=$servername;dbname=form-php", $username, $password);
                           //On définit le mode d'erreur de PDO sur Exception
                           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                           
                           $sql = "CREATE TABLE Clients(
                            Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                            Pseudonyme VARCHAR(30) NOT NULL,
                            Mail VARCHAR(50) NOT NULL,
                            DateNaissance DATE(8) NOT NULL,
                            MotDePasse VARCHAR(30) NOT NULL,
                            UNIQUE(Pseudonyme))
                            UNIQUE(MotDePasse))
                            UNIQUE(Mail))";
                    
                    $dbco->exec($sql);
                    echo 'Table bien créée !';
                }
                       
                       /*On capture les exceptions si une exception est lancée et on affiche
                        *les informations relatives à celle-ci*/
                       catch(PDOException $e){
                         echo "Erreur : " . $e->getMessage();
                       }

                       //On ferme la connexion
                       $conn = null;
        ?>

<div class="container d-flex justify-content-center">
    <div id="jumboups" class="jumbotron">
    <h1 class="display-4 text-center">Oups...</h1> 
    <p class="lead text-center">Interdit aux - 18 ans</p>
    <div class="row justify-content-center">
            <div id="two-pimples" class="col-4 col-sm-4 col-lg-3">
                        <a href="register.php" class="btn btn-dark txt-white">Inscription</a>
            </div>
            <div id="two-pimples" class="col-4 col-sm-4 col-lg-3">
                        <a href="login.php" class="btn btn-dark txt-white">Connexion</a>
            </div>       
                </div>
        </div>
        </div>
</body>

</html>