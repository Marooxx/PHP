<!-- créer un formulaire avec les champs : destinataire, expéditeur,sujet,message.Contrôler les champs du formualire , les afficher en haut de la page-->

<h1> FORMULAIRE 5</h1>
<form method='post' action=''><!-- method : comment vont circuler les données? -- action :url de destination-->

<label for="destinataire">Destinataire</label>
<input id="destinataire" type='email' name='destinataire'>
<br><br>
<label for="expediteur">Expéditeur</label>
<input id="expediteur" type='email' name='expediteur'>
<br><br>
<label for="sujet">Sujet</label>
<input id="sujet" type='text' name='sujet'>
<br><br>
<label for="message">Message</label>
<textarea  name='message' id="message" rows="10" cols="50" ></textarea>
<br><br>


<button type="submit" value="envoi">Envoyer</button>
</form>

<?php

if($_POST){
	foreach($_POST as $name =>$value){
		echo $name.':'.$value.'<br>';
	}
	$_POST['expediteur'] = 'From : '.$_POST['expediteur'];
	mail($_POST['destinataire'],$_POST['sujet'],$_POST['message'],$_POST['expediteur']);
	// la fonction "mail()" reçoit toujours  4 arguments et l'ordre à une importance cruciale.Comme dans la plupart des fonctions, il faut respecter LE NOMBRE et l'ORDRE des arguments que l'on transmet.
}
