<?php
echo'<pre>';print_r($_POST);echo'</pre>';// les infos vont être stockées dans la super globale 


?>
<h2>FORMULAIRE</h2>
<br>
<form method='post'>
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
     