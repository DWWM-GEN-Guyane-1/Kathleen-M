<!-- Ce fichier permet d’ajouter les données soumises via le formulaire, dans la base de données. -->
<?php
// Permet d'inclure le fichier, d'accéder à son contenu et de le récupérer.
include("register.php");

if ($POST['nom'] != '' AND $POST['prenom'] != '' AND $POST['age'] != '')
{
register();
$sql = "INSERT INTO form-php(id,nom,prenom,age) ";
$sql .= "VALUES('','".$_POST['nom']."','".$_POST['prenom']."','".$_POST['age']."')";
    
mysql_query($sql) or die(mysql_error());
}
// else
// {
//     echo 'Attention ! Vous devez remplir tous les champs !';
// }
?>