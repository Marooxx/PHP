



<?php

if($_POST){// SI le bouton d'envoi a été activé , le script se lance
echo "ville : ".$_POST['ville'].'<br>';
echo"code postal :".$_POST['codepostal'].'<br>';
echo"adresse :".$_POST['adresse'].'<br>';

}
echo'<pre>';print_r($_POST);echo'</pre>';

?>

<!-- Exxercice : créer un formulaire avec les 3 champs suivants : ville,code postal-->
<h2>FORMULAIRE</h2>
<br>
<form method='post'><!-- method : comment vont circuler les données? -- action :url de destination-->
<label for="ville">Ville</label>
<br>
<input id="ville" type='text' name='ville' placeholder='Ville' autofocus>
<br><br>
<label for="cp">Code postal</label>
<br>
<input id="cp" type='text' name='codepostal' placeholder='Code Postal' autofocus>
<br><br>
<label for='adresse'> Adresse</label>
<br>
<textarea name='adresse' id="adresse" rows="10" cols="50" placeholder="adresse"></textarea>
<br>
<button type="submit" value="envoi">Envoyer</button>
	 
</form>
<!-- il NE FAUT SURTOUT PAS OUBLIER LES 'NAME'-->


<?php
// récupération des données à l'aide d'une boucle
if($_POST){
	
	foreach($_POST as $indice=> $valeur){
		echo $indice.':'.$valeur.'<br>';
}
}
// la boucle "foreach(..as..)" permet de parcourir uniquement les tableaux pour en faire ressortir les valeurs