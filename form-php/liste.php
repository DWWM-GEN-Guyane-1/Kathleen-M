<!-- Ce fichier permet d'afficher la liste de tous les enregistrements de la base de données. -->

<a href="liste.php?orderby=asc">Trier par ordre croissant</a>
<a href="liste.php?orderby=desc">Trier par ordre décroissant</a>

<?php
include("register.php");
register();
// Permet d'afficher tous les éléments de la table
$sql = 'SELECT * FROM form-php';
$req = mysql_query($sql) or die(mysql_error());


echo '<table>';
while($data = mysql_fetch_assoc($req))
{
   echo '<tr>';
   echo '<td>$data["id"]</td>';
   echo '<td>$data["nom"]</td>';
   echo '<td>$data["prenom"]</td>';
   echo '<td>$data["age"]</td>';
   echo '</tr>';
}
echo '</table>';

// Trier la liste :
// si on veut un ordre croissant
if($_GET["orderby"] == "asc")
{
    $sql = "SELECT * FROM form-php ORDER BY id ASC";
}
// si on veut un ordre décroissant
elseif($_GET["orderby"] == "desc") 
{
    $sql = "SELECT * FROM form-php ORDER BY id DESC";
}
// si rien n'a été précisé
else 
{
    $sql = "SELECT * FROM form-php";
}





