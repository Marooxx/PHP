<--

<ul>
	<li><a href="?choix=france">FRANCE</a></li><br>
	<!-- choix  qui s'écrit "?choix" est une sorte de variable qui prend différentes valeurs-->
	<li><a href="?choix=italie">ITALIE</a></li><br>
	<!-- le GET va récupérer les valeurs de "?choix"-->
	<li><a href="?choix=espagne">ESPAGNE</a></li><br>
	<li><a href="?choix=angleterre">ANGLETERRE</a></li><br>
</ul>
<hr>

<?php
if($_GET){
if (isset($_GET['choix'])){
	
	switch($_GET['choix']){// on va chercher les valeurs de "choix" par la méthode $_GET['choix'] = valeur de choix(ici 'france')
		case 'france':// on inscrit ici les valeurs de "?choix"
		echo' Cocorico ,Vous êtes français!';
		break;
		// Si "choix " prends la valeur de "france" alors il lance le "echo"
		case 'italie':
		echo ' Mamamia ,Vous êtes un italien!';
		break;
		
		case 'espagne':
		echo ' Olé Vous êtes un espagnol !';
		break;
		
		case 'angleterre':
		echo 'Oh my god, vous êtes un anglais!';
		
		default : 
		echo 'Il faut renseigner un pays!';
		}
	
	
	}
}	
	

	
?>




