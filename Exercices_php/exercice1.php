<?php
if($_POST){// SI le bouton d'envoi a été activé , le script se lance
echo "Titre : ".$_POST['titre'].'<br>';
echo"La Couleur :".$_POST['couleur'].'<br>';
echo"description :".$_POST['taille'].'<br>';
echo"description :".$_POST['poids'].'<br>';
echo"description :".$_POST['prix'].'<br>';
echo"description :".$_POST['description'].'<br>';
echo"description :".$_POST['stock'].'<br>';


}
echo'<pre>';print_r($_POST);echo'</pre>';




?>
<h2>FORMULAIRE</h2>
<br>
<form method='post'><!-- method : comment vont circuler les données? -- action :url de destination-->
<label for="titre">Titre</label>
<br>
<input id="titre" type='text' name='titre'>
<br><br>
<label for='couleur'> Couleur</label>
<input id="couleur" type="text" name="couleur">
<br><br>
<label for='taille'> Taille</label>
<input id="taille" type="text" name="taille">
<br>
<label for='poids'>Poids</label>
<input id="poids" type="text" name="poids">
<br>
<label for='prix'>Prix</label>
<input id="prix" type="text" name="prix">
<br>
<label for='description'>Description</label>
<input id="description" type="text" name="description"

<label for='stock'>Stock</label>
<input id="stock" type="text" name="stock">
<br>
<label for='fournisseur'>Fournisseur</label>
<input id="fournisseur" type="text" name="fournisseur">
<br>



<button type="submit" value="envoi">Envoyer</button>
	 
</form>