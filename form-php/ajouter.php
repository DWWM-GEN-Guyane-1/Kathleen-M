<?php
//Connexion à la bdd
            $servname = 'localhost';
            $dbname = 'form-php';
            $user = 'root';
            $pass = 'S1mpl0n973!';

            $username = $_POST["username"];
            $password = $_POST["password"];
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=form-php", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //Insérer les données reçues via le formulaire
                $sql = $dbco->prepare("
                INSERT INTO form_user(username,password)
                        VALUES(:username, :password)");
                
                $sql->bindParam(':username',$username);
                $sql->bindparam(':password',$password);
                $sql->execute();

                //On renvoie l'utilisateur vers la page de remerciement
        header("Location:form-validation.php");

                $query = mysql_query("select * from form_user", $connection);//select data from database
            }

            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
              }
          ?>

