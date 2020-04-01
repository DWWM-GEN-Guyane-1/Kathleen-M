<!-- Ce fichier permet de créer les tables correspondantes au mcd. -->
<?php
// Permet d'inclure le fichier, d'accéder à son contenu et de le récupérer.
include("register.php");
 
register();
 
$sql= "CREATE TABLE IF NOT EXISTS `form-php` (";
// ".=" permet d'ajoutez ce qui suit à la fin de la variable, après ce qu’elle contient déjà.
$sql .= "`id` int(11) NOT NULL auto_increment,";
$sql .= "`nom` text NOT NULL,";
$sql .= "`prenom` text NOT NULL,";
$sql .= "`age` int NOT NULL,";
$sql .= "PRIMARY KEY  (`id`),";
$sql .= "UNIQUE KEY `id_2` (`id`),";
$sql .= "KEY `id` (`id`)";
$sql .= ") ENGINE=MyISAM;";
 
mysql_query($sql) or die(mysql_error());

mysql_query("INSERT INTO form-php (id,nom,prenom,age) VALUES('','$nom','$prenom','$age')") or die (mysql_error());
?>