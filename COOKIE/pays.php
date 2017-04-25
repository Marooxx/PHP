<?php
/* cookie est un fichier sauvegardé sur l'ordinateur de l'internaute avec des informations à l'intérieur.
Les informations à l'intérieur , ne sont pas sensibles(pas de mot de passe), il s'agit en générale de préférences.
Exemple : langue dans laquelle l'internaute souhaite visiter le site,derniers produits consultés dans une boutique, etc...
*/

// Exercice : effectuer des liens pointant sur la même page dans une liste ul li pour 4 pays : France,Espagne,Angleterre,Italie
?>

<h2> Exercice cookie</h2>
<ul>
	<li><a href="?pays=france">France</a></li>
	<li><a href="?pays=espagne">Espagne</a></li>
	<li><a href="?pays=angleterre">Angleterre</a></li>
	<li><a href="?pays=italie">Italie</a></li>
</ul>
<?php
if(isset($_GET['pays'])){
	$pays = $_GET['pays'];// si je clique sur un lien 
	// si un pays est passé dans l'URL , c'est que nous avons cliqué sur un lien
}
elseif(isset($_COOKIE['pays'])){// si cookie a été crée
	$pays = $_COOKIE['pays'];
}// on ne rentrera dans le "elseif" uniquement si la condition du dessus donc "if" n'est pas passé et qu'un cookie existe.
else{
	$pays='france';
	}// sinon dans le cas où le "if" et le "elseif" ne fonctionnent pas , le cas par défaut s'applique


$un_an = 365*24*3600;// cookie en seconde pour un an 
setCookie("pays",$pays,time()+$un_an);
//setCookie est une fonction prédéfinie permettant de créer un fichier cookie. Elle reçoit 3 arguments : LE NOM DU COOKIE,LE CONTENU DU COOKIE,LA DUREE DE VIE D'UN COOKIE

// Exercice : afficher grâce à une condition switch, une phrase en fonction du lien cliqué

switch($pays){
	
	case 'france': echo "Vous êtes en langue française ";break;
	case 'espagne' : echo " Vous êtes en langue espagnole";break;
	case 'italie': echo " Vous êtes en langue italienne";break;
	case 'angleterre': echo " Vous êtes en langue angleterre";break;
}	
	
print_r($_COOKIE);
	
	
	
	
	
?>

  

























