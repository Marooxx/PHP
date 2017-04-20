<?php
/*if($_POST){// SI le bouton d'envoi a été activé , le script se lance
echo "Pseudo: ".$_POST['pseudo'].'<br>';
echo"Mot de passe:".$_POST['mdp'].'<br>';
echo"Email :".$_POST['email'].'<br>';*/




if($_POST){

if ( strlen($_POST['pseudo']) <3 ||strlen($_POST['pseudo'])>10  ) {
	echo'Veuillez ressaisir votre pseudo';

}
	else{
	echo "Pseudo: ".$_POST['pseudo'].'<br>';
	echo"Mot de passe:".$_POST['mdp'].'<br>';
	echo"Email :".$_POST['email'].'<br>';
}

}
?>	


<h1> FORMULAIRE 3</h1>
<form method='post'><!-- method : comment vont circuler les données? -- action :url de destination-->
<label for="pseudo">Pseudo</label>
<br>
<input id="pseudo" type='text' name='pseudo'>
<br><br>
<label for='mdp'> Mot de passe</label>
<input id="mdp" type="password" name="mdp">
<br><br>
<label for='email'> Email</label>
<input id="email" type="email" name="email">
<br>
<button type="submit" value="envoi">Envoyer</button>
</form>