<?php
/*Exercice :
1.Effectuer 4 liens HTML pointant sur la m�me page avec le nom des fruits. 
2.Faites en sortent d'envoyer "cerises" dans l'url si l'on clic sur le lien "cerises"
3.Tenter d'afficher "cerises" sur la page web si l'on clique dessus(si "cerises est pass� dans l'url par cons�quent").
4.Envoyer l'information � la fonction d�clar�e "calcul()" afin d'afficher le prix pour 1kg de 'cerises'.
*/
include('fonction.inc.php');
echo "<a href='?choix=bananes'>Bananes</a>";
echo "<a href='?choix=cerises'>Cerises</a>";
echo "<a href='?choix=pommes'>Pommes</a>";
echo "<a href='?choix=peches'>P�che</a>";

// avec la super globale "GET", on r�cup�re les valeurs dans l'url
foreach($_GET as $article =>$produit){//
				 
	echo 'Vous avez choisi '.$article.':'.$produit.'<br>';
}



if($_GET){

echo "Votre fruit est : ".$_GET['choix'].'<br>';
echo calcul($_GET['choix'],1000);
echo '<pre>';print_r($_GET);echo'</br>';
}
