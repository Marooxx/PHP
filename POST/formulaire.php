<?php
if($_POST){// SI le bouton d'envoi a �t� activ� , le script se lance
echo "prenom : ".$_POST['prenom'].'<br>';
echo"description :".$_POST['description'].'<br>';

}
echo'<pre>';print_r($_POST);echo'</pre>';// les infos vont �tre stock�es dans la super globale 
/* au premier chargement de la page le "if"($_POST),nous avons 2 erreurs 'undifined' ce qui est tout � fait normal puisqu'il n'y a pas eu d'action sur le formulaire, si on recharge la page, les erreurs disparaissent puisque nous avons
cliqu� sur le bouton envoi, l'int�preteur d�tecte � ce moment l� l'existence d'un formulaire*/
?>
<h2>FORMULAIRE</h2>
<br>
<form method='post'><!-- method : comment vont circuler les donn�es? -- action :url de destination-->
<label for="prenom">Prenom</label>
<br>
<input id="prenom" type='text' name='prenom' placeholder='tapez votre prenom' autofocus>
<br><br>
<label for='description'> Description</label>
<br>
<textarea name='description' id="description" rows="10" cols="50" placeholder="Description"></textarea>
<br>
<button type="submit" value="envoi">Envoyer</button>
	 
</form>
<!-- il NE FAUT SURTOUT PAS OUBLIER LES 'NAME'-->

  