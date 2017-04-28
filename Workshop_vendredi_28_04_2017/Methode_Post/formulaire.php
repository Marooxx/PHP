<?php
if($_POST){
	echo "Nom : ".$_POST['nom'].'<br>';
	echo"Prenom :".$_POST['prenom'].'<br>';
	echo"Adresse : ".$_POST['adresse'].'<br>';
	echo"Ville : ".$_POST['ville'].'<br>';
	echo"Code postal : ".$_POST['cp'].'<br>';
	echo"Sexe : ".$_POST['sexe'].'<br>';
	echo"Description : ".$_POST['description'].'<br>';
	

}
/*echo'<pre>';print_r($_POST);echo'</pre>';
cette ligne est dédiée au développeur-- permet de vérifier si tous les champs sont remplis et que cela fonctionne bien
*/




?>




<!DOCTYPE html>
	<html>
		<head>
		<meta charset='utf8'>
			<title>Workshop</title>
		<link rel="stylesheet" href="style_formulaire1.css">
		</head>
		
	<body>
	<div class="container">
	<h2> Formulaire workshop1(exercice 1.1)</h2>
	<br>

		<form method="post">
		
		<label for='nom'>Nom</label>
		<br>
		<input name="nom" type="text" placeholder="Votre nom">
		<br><br>
		<label for='prenom'>Prénom</label>
		<br>
		<input name="prenom" type="text" placeholder="Votre Prénom">
		<br><br>
		<label for='adresse'>Adresse</label>
		<br>
		<input name="adresse" type="text" placeholder="Votre adresse">
		<br><br>
		<label for='cp'>Code postal</label>
		<br>
		<input name="cp" type="text" placeholder="Votre code postal"
		<br><br>
		<label for='ville'>Ville</label>
		<br>
		<input name ="ville" type="text" placeholder="Votre Ville">
		<br><br>
		<label for='sexe'>Sexe</label>
		<br>
		<select name="sexe">
		<option>Masculin</option>
		<option>Féminin</option>
		</select>
		<br><br>
		<label for="description">Description</label>
		<textarea name="description"  rows="2" cols="20"></textarea>
		<br><br>
		
		<INPUT type="submit" value="Envoyer">
		</form>	
	</div>
   </body>
   </html>