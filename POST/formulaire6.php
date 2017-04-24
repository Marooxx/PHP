<h1> FORMULAIRE 6</h1>
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
////////////////// ENVOI DE MAIL (exp : newsletter) /////////////////////////////////////////////
if($_POST){
	echo'<pre>';print_r($_POST);echo'</pre>';
	$_POST['expediteur'] = "From : $_POST['expediteur']\n";
	$_POST['expediteur'] .="MIME-Version: 1.0\r\n";// MIME-Version permet d'ajouter des fichiers (photos,vidéos,...).MIME est un standard d'en de mail.
	$_POST['expediteur'] .="Content-type/text/html; charset = utf8 \r\n";// permet de coder du html dans le message.Grâce à cette ligne de code, on pourra envoyer directement du HTML dans le message(pratique pour l'envoi d'une newletter) exp:<div style="background:#fff;>Bonjour</div>
	mail($_POST['destinataire'],$_POST['sujet'],$_POST['message'],$_POST['expediteur']);
}
?>





