<?php
require_once("../Inc/init.php");

/* Réaliser la page gestionCommande
Affichage sous forme de tableau HTML l'ensemble de la table membre en BDD
Faites en sorte de pouvoir modifier et supprimer un membre
*/

//---------- SUPPRESSION COMMANDE----------------
if(isset($_GET['action']) && $_GET['action'] == "suppression")
{
$contenu .='<div class="validation">Suppression de commande : ' . $GET['id_commande'] . '</div>';
$resultat = executeRequete("DELETE FROM commande WHERE id_commande= '$_GET[id_commande]'");
$_GET['action']='affichage';
}
//debug($_POST);// on vérifie tous les champs
//--------------- ENREGISTREMENT DE PRODUIT------------------------
if(!empty($_POST)){
	if(isset($_GET['action']) && $_GET['action'] == 'modification')

	{
		foreach($_POST as $indice=>$valeur){
			$_POST[$indice] = htmlentities(addSlashes($valeur));// traduit le html avec htmlentities()
		}
		// Executer une requête d'insertion permettant d'insérer un produit dans la base
		executeRequete("REPLACE INTO commande (/*id_details_commande,id_commande,id_produit,*/quantite,prix) VALUES(/*'$_POST[id_details_commande]','$_POST[id_commande]','$_POST[id_produit]',*/'$_POST[quantite]','$_POST[prix]')");
		$contenu.="<div class='validation'>Nous avons bien enregistré votre commande!</div>";
		$_GET['action'] = 'affichage';

	}


}
//------------- LIENS PRODUITS------------//
$contenu .= '<a href="?action=affichage">Affichage des commandes</a><br>';
//$contenu.="<br><button><a href='gestionMembres.php?categorie=" . $['']."'> Retour vers la page des membres ".$['']."</a></button>";

//---------------- AFFICHAGE PRODUITS--------------------------//
if(isset($_GET['action']) && $_GET['action'] == 'affichage')
{// Au momemnt où on clique , on rentre dans la condition
    $resultat = executeRequete("SELECT*FROM commande");// on sélectionne tous les produits

	$contenu .= '<h2> Affichage des commandes</h2>';
	$contenu .= 'Nombre de commande(s) : '.$resultat->num_rows;// on compte le nombre de produits dans la table "produit" grâce à num_rows
	$contenu .= '<table border = "1" cellpadding ="5"><tr>';

	while($colonne = $resultat->fetch_field())
	{
		// on récupère le nom des champs
		$contenu .='<th>'. $colonne->name . '</th>';// affiche le nom de colonne de chaque champs
	}// $colonne faite de la classe STD
	// on crée 2 entêtes supplementaires : suppression et modification
		$contenu .='<th>Modification</th>';
		$contenu .='<th>Suppression</th>';
		$contenu .= '</tr>';


	while($ligne = $resultat->fetch_assoc())
		{/* on transforme $ligne en tableau par la méthode fetch_assoc()
) et rend les informations de $resultat exploitable*/
		$contenu .='<tr>';
			foreach($ligne as $indice=>$information)
			{//foreach(..as..) va parcourir tout le tableau pour récolter les infos

				//sinon elle affiche les informations normalement
				$contenu .='<td>' . $information . '</td>';
			}

		$contenu .= '<td><a href="?action=modification&id_commande='.$ligne['id_commande'] .'"><img src="../Inc/img/edit.png"></a></td>';
		$contenu .= '<td><a href="?action=suppression&id_commande='.$ligne['id_commande'] .'"onClick="return(confirm(\'Êtes vous certain de vouloir nous quitter?\'));"><img src="../Inc/img/delete.png"></a></td>';
		}
		// en fonction de l'id_commande que j'envois sur l'url , cela lance l'action suppression ou modification



		$contenu .="</tr>";


	$contenu .="</table><br><hr><br>";
}


require_once("../Inc/haut_inc.php");
echo $contenu;

if(isset($_GET['action']) &&  $_GET['action'] == 'modification')
{
	if(isset($_GET['id_commande']))
	{

		$resultat = executeRequete("SELECT*FROM commande WHERE id_commande= $_GET[id_commande]");// on récupère les informations sur l'article à modifier
		$commande_actuelle = $resultat->fetch_assoc();/*on rend les informations exploitables afin de les présaisir dans les cases du formulaire*/

	}
	//  Au moment où je clique sur modification , je récupère les données du membre
	$id_details_commande = (isset($commande_actuelle['id_details_commande']))?$commande_actuelle['id_details_commande']:'';
	$id_commande = (isset($commande_actuelle['id_commande']))?$commande_actuelle['id_commande']:'';
	$id_produit = (isset($commande_actuelle['id_produit']))?$commande_actuelle['id_produit']:'';
	$quantite = (isset($commande_actuelle['quantite']))?$commande_actuelle['quantite']:'';
	$prix = (isset($commande_actuelle['prix']))?$commande_actuelle['prix']:'';








// on va crée un champs caché pour pouvoir récupérer  les données de l'id_produit
echo'<form method="post" enctype="multipart/form-data" action="">
<h2>FORMULAIRE DE COMMANDE </h2><br>

<input type="hidden" id="id_details_commande" name="id_details_commande" value="'.$id_details_commande.'"><br>

<label for="id_produit">Identifiant du produit</label><br>
<input id="id_produit" type="hidden" name="id_produit" value="'.$id_produit.'"><br><br>

<label for="quantite_">Quantite</label><br>
<input id="quantite" type="text" name="quantite"  value="'.$quantite.'"><br><br>

<label for="prix">Prix</label><br>
<input id="prix" type="text" name="prix" value="'.$prix.'"><br><br>




<input type="submit" value="';echo ucfirst($_GET['action']).' de la commande">

</form>';
}

// on va récupérer les données de l'url via le formulaire grâce au "value"
if($_GET)
{
    $resultat = executeRequete("SELECT * FROM details_commande WHERE id_commande= '$_GET[id_commande]'");

    $contenu .= '<h2>Affichage des détails de la commande</h2>';
    //$contenu .= 'Nombre de commandes : ' . $resultat->num_rows;
    $contenu .= '<table border="1" cellpading="5"><tr>';

    while($colonne = $resultat->fetch_field())
    {
        $contenu .= '<th>' . $colonne->name . '</th>';
    }

    $contenu .= '</tr>';

    while ($ligne = $resultat->fetch_assoc()) {
        $contenu .= '<tr>';
        foreach ($ligne as $indice => $information) {
                $contenu .= '<td>' . $information . '</td>';
        }

    }

    $contenu .= '</table><br><hr><br>';
}
echo $contenu;











require_once("../Inc/bas_inc.php");

?>
