<?php
// Cette fonction permet de se connecter la base de données en PHP Data Objects (PDO).
$servername = "localhost"; /* L'adresse du serveur */
$username = "root";/* Votre nom d'utilisateur */
$password = "S1mpl0n973!";/* Votre mot de passe */

try {
    $conn = new PDO("mysql:host=$servername;dbname=form-php", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion établie";
    }
catch(PDOException $e)
    {
    echo "Connexion ratée: " . $e->getMessage();
    }
// Permet de rompre la connexion.
    $conn = null;
     // End
// Requête permettant d'ajouter un inscrit
function addRegister()
{
   return 'INSERT INTO form-php(id,username,date,password)'
}
?> 
<!-- $host = "localhost"; /* L'adresse du serveur */
$login = "root"; /* Votre nom d'utilisateur */
$password = "S1mpl0n973!"; /* Votre mot de passe */
$base = "form-php"; /* Le nom de la base */

function connexion()
{
    global $host, $login, $password, $base;
    $db = mysql_connect($host, $login, $password);
    mysql_select_db($base,$db);
} -->

<!-- // Cette fonction permet de 
function erreur($err='')
{
   $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
   exit('<p>'.$mess.'</p>
   <p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');
}
?> -->
