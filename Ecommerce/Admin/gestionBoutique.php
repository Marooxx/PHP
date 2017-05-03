<?php
require_once("../Inc/init.php");
//---------- SUPPRESSION PRODUIT----------------
if(isset($_GET['action']) && $_GET['action'] == "suppression")
{
$contenu .='<div class="validation">Suppression de produit : ' . $GET['id_produit'] . '</div>';
$resultat = executeRequete("DELETE FROM produit WHERE id_produit= '$_GET[id_produit]'");
$_GET['action']='affichage';	
}
//debug($_POST);// on vérifie tous les champs 
//--------------- ENREGISTREMENT DE PRODUIT------------------------
if(!empty($_POST)){
	$photo_bdd="";
	if(!empty($_FILES['photo']['name'])){
		//debug($_FILES);
		$nom_photo = $_POST['reference']."_".$_FILES['photo']['name'];
		$photo_bdd = URL. "Photos/$nom_photo";// chemin de la base de donnée du nom de la photo
		$photo_dossier = RACINE_SITE . "Photos/$nom_photo";
		copy($_FILES['photo']['tmp_name'],$photo_dossier);// copy() permet de faire une copie de la photo dans le dossier photo
	}
		foreach($_POST as $indice=>$valeur){
			$_POST[$indice] = htmlentities(addSlashes($valeur));// traduit le html avec htmlentities()
		}
		// Executer une requête d'insertion permettant d'insérer un produit dans la base
		executeRequete("INSERT INTO produit (reference,categorie,titre,description,couleur,taille,public,photo,stock,prix) VALUES('$_POST[reference]','$_POST[categorie]','$_POST[titre]','$_POST[description]','$_POST[couleur]','$_POST[taille]','$_POST[public]','$photo_bdd','$_POST[stock]','$_POST[prix]')");
		$contenu.="<div class='validation'>Votre produit a bien été enregistré</div>";
		$_GET['action'] = 'affichage';

	} 
//------------- LIENS PRODUITS------------//
$contenu .= '<a href="?action=affichage">Affichage des produits</a><br>';
$contenu .= '<a href="?action=ajout">Ajout d\'un produit</a><br><br><br>';

//---------------- AFFICHAGE PRODUITS--------------------------//
if(isset($_GET['action']) && $_GET['action'] == 'affichage'){
	$resultat = executeRequete("SELECT*FROM produit");
	$contenu .= '<h2> Affichage des produits</h2>';
	$contenu .= 'Nombre de produits dans la boutique : '.$resultat->num_rows;// on compte le nombre de produits grâce à num_rows
	$contenu .= '<table border = "1" cellpadding ="5"><tr>';
	
	while($colonne = $resultat->fetch_field()){// on récupère le nom des champs 
		$contenu .='<th>'. $colonne->name . '</th>';// affiche le nom de colonne de chaque champs
	}
	// on crée 2 entêtes supplementaires : suppression et modification
		$contenu .='<th>Modification</th>';
		$contenu .='<th>Suppression</th>';
		$contenu .= '</tr>';
	
		
	while($ligne = $resultat->fetch_assoc()){/* on transforme $ligne en tableau par la méthode fetch_assoc(
) et rend les informations de $resultat exploitable*/
		$contenu .='<tr>';
		foreach($ligne as $indice=>$information){
			if($indice =="photo"){
			// on donne une dimension au image 
				$contenu .='<td><img src="' .$information . '"width="70" height="70"></td>';
			}
			else{
				//sinon elle affiche les informations normalement
				$contenu .='<td>' . $information . '</td>';
			}
			
		
		}
		// en fonction de l'id_produit que j'envois sur l'url , cela lance l'action suppression ou modification
		$contenu .= '<td><a href="?action=modification&id_produit='.$ligne['id_produit'] .'"><img src="../Inc/img/edit.png"></a></td>';
		$contenu .= '<td><a href="?action=suppression&id_produit='.$ligne['id_produit'] .'"><img src="../Inc/img/delete.png"></a></td>';
		$contenu .="</tr>";
	 
	}
	$contenu .="</table><br><hr><br>";
	
}


require_once("../Inc/haut_inc.php");
echo $contenu;
// Exercice: dans le fichier "gestionBoutique",réaliser un formulaire html correspondant à la table produit
if(isset($_GET['action']) && ($_GET['action'] == 'ajout' || $_GET['action'] == 'modification'))
{
	if(isset($_GET['id_produit']))
	{
		
		$resultat = executeRequete("SELECT*FROM produit WHERE id_produit= $_GET[id_produit]");// on récupère les informations sur l'article à modifier
		$produit_actuel = $resultat->fetch_assoc();/*on rend les informations exploitables afin de les présaisir dans les cases du formulaire*/
		
	}
	
	
	
	
	
	
// on va crée un champs caché pour pouvoir récupérer  les données de l'id_produit	
echo'<form method="post" enctype="multipart/form-data" action="">
<h2>FORMULAIRE DES PRODUITS</h2><br>

<input type="hidden" id="id_produit" name="id_produit"><br>

<label for="reference">Référence</label><br>
<input id="reference" type="text" name="reference" placeholder="référence produit"><br><br>

<label for="categorie">Categorie</label><br>
<input id="categorie" type="text" name="categorie" placeholder="Catégorie"><br><br>

<label for="titre">Titre</label><br>
<input id="titre" type="text" name="titre" placeholder="Nom du produit"><br><br>

<label for="description">Description</label><br>
<textarea rows="10" cols="50" name="description" placeholder="Vous pouvez écrire quelque chose ici"></textarea><br><br>

<label for="couleur">Couleur</label><br>
<select id="couleur" name="couleur">
<option>bleu</option>
<option>orange</option>
<option>jaune</option>
<option>vert</option>
</select><br><br>

<label for="taille">Taille</label><br>
<select id="taille" name="taille" >
<option>S</option>
<option>M</option>
<option>L</option>
<option>XL</option>
<option>XXL</option>
</select><br><br>

<label for="public">Public</label><br>
<input type="radio" name="public" value="m" checked>Homme
<input type="radio" name="public" value="f">Femme
<input type="radio" name="public" value="mixte">Mixte
<br><br>

<input type="hidden" id="photo_actuelle" name="photo_actuelle"><br>
<label for="photo">Photo</label><br>
<input id="photo" type="file" name="photo" placeholder="Votre photo"><br><br>

<label for="stock">Stock</label><br>
<input id="stock" type="text" name="stock" placeholder="stock"><br><br>

<label for="prix">Prix</label><br>
<input id="prix" type="text" name="prix" placeholder="prix"><br><br>

<input type="submit" value="envoyer">

</form>';
}
require_once("../Inc/bas_inc.php");






