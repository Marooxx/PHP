<?php
/* cookie est un fichier sauvegard� sur l'ordinateur de l'internaute avec des informations � l'int�rieur.
Les informations � l'int�rieur , ne sont pas sensibles(pas de mot de passe), il s'agit en g�n�rale de pr�f�rences.
Exemple : langue dans laquelle l'internaute souhaite visiter le site,derniers produits consult�s dans une boutique, etc...
*/

// Exercice : effectuer des liens pointant sur la m�me page dans une liste ul li pour 4 pays : France,Espagne,Angleterre,Italie
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
	// si un pays est pass� dans l'URL , c'est que nous avons cliqu� sur un lien
}
elseif(isset($_COOKIE['pays'])){// si cookie a �t� cr�e
	$pays = $_COOKIE['pays'];
}// on ne rentrera dans le "elseif" uniquement si la condition du dessus donc "if" n'est pas pass� et qu'un cookie existe.
else{
	$pays='france';
	}// sinon dans le cas o� le "if" et le "elseif" ne fonctionnent pas , le cas par d�faut s'applique


$un_an = 365*24*3600;// cookie en seconde pour un an 
setCookie("pays",$pays,time()+$un_an);
//setCookie est une fonction pr�d�finie permettant de cr�er un fichier cookie. Elle re�oit 3 arguments : LE NOM DU COOKIE,LE CONTENU DU COOKIE,LA DUREE DE VIE D'UN COOKIE

// Exercice : afficher gr�ce � une condition switch, une phrase en fonction du lien cliqu�

switch($pays){
	
	case 'france': echo "Vous �tes en langue fran�aise ";break;
	case 'espagne' : echo " Vous �tes en langue espagnole";break;
	case 'italie': echo " Vous �tes en langue italienne";break;
	case 'angleterre': echo " Vous �tes en langue angleterre";break;
}	
	
print_r($_COOKIE);
	
	
	
	
	
?>

  

























