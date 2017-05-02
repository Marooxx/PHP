<?php
require_once('Inc/init.php');
// si le membre n'est pas connecté , il ne doit pas avoir accès à la page profil.
if(!internauteConnecte()){
	header("location:connexion.php");
}
	
require_once("Inc/haut_inc.php");
?>
<?php
debug($_SESSION);// Dès lors que la "session_start" est inscrite,les sessions sont disponibles sur toutes les pages du site




// Exercice : Afficher sur la page profil , le pseudo , email,ville,code postal,adresse du membre connecté en passant par le fichier $_SESSION

// Pour afficher le contenu des tableaux , on créé une variable de réception pour contenir toutes les informations et pouvoir les afficher
$contenu.="<p class ='centre'>Bonjour<strong>".$_SESSION['membre']['pseudo']." </strong></p><br>";
//echo $contenu;
$contenu.="<div class='cadre'><h2>Voici les informations de votre profil</h2><br>";
$contenu.='<p> Votre pseudo est :'.$_SESSION['membre']['pseudo'].'<p><br>';
$contenu.='<p> Votre nom est : '.$_SESSION['membre']['nom'].'<p><br>';
$contenu.='<p> Votre prenom est : '.$_SESSION['membre']['prenom'].'<p><br>';
$contenu.='<p> Votre ville est : '.$_SESSION['membre']['ville'].'<p><br>';
$contenu.='<p> Votre code postal est : '.$_SESSION['membre']['code_postal'].'<p><br>';
$contenu.='<p> Votre nom est : '.$_SESSION['membre']['email'].'<p><br>';

echo $contenu;

?>

<?php
// BAS DE PAGE
require_once("Inc/bas_inc.php");

?>

























