<?php
/*
Exercice : R�aliser un formulaire de contact pour un futur projet.
1.Vous devez proc�der aux changements vous permettant d'�tre l'unique destinataire du message
2.Vous devez ajouter les champs : soci�t�,nom,pr�nom,sans pour autant retirer les champs actuels
*/
?>

<h2> FORMULAIRE 7 email </h2>
<br>
<form method='post' action=''>

<label for="destinataire">Destinataire</label>
<input id="destinataire" type='email' name='destinataire'>
<br><br>

<label for="expediteur">Exp�diteur</label>
<input id="expediteur" type='email' name='expediteur'>
<br><br>

<label for='nom'>Nom</label>
<input name='nom' type='text' id='nom'>
<br><br>

<label for='prenom'>Prenom</label>
<input name='prenom' type='text' id='prenom'>
<br><br>

<label for="sujet">Sujet</label>
<input id="sujet" type='text' name='sujet'>
<br><br>

<label for ='societe'>Soci�t�</label>
<input id='societe' type='text' name='societe'>
<br><br>

<label for="message">Message</label>
<br>
<textarea  name='message' id="message" rows="10" cols="50" ></textarea>
<br><br>


<button type="submit" value="envoi">Envoyer</button>
</form>
<?php

if($_POST){
	echo'<pre>';print_r($_POST);echo'</pre>';
	// on ajoute des infos pour le champs "Exp�diteur"
	$_POST['expediteur'] = "From : $_POST[expediteur] \n";
	$_POST['expediteur'] .="MIME-Version: 1.0 \r\n";// MIME-Version permet d'ajouter des fichiers (photos,vid�os,...).MIME est un standard d'en de mail.
	$_POST['expediteur'] .="Content-type/text/html; charset = utf8 \r\n";// 
	// on rajoute des infos sur le champs message
	$_POST['message'] ="Nom :$_POST[nom]\r\n";
	$_POST['message'] .= "Pr�nom : $_POST[prenom]\r\n";
	$_POST['message'] .="Soci�t� : $_POST[societe]\r\n";

mail("monAdresse@gmail", $_POST['sujet'], $_POST['message'], $_POST['expediteur']);
}
	// on modifie l'argument destinataire de la fonction mail() en ins�rant le mail de la personne doit recevoir le message qui lui permettra d'�tre l'unique destinataire
