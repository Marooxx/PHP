
<h2> Formulaire_fruit</h2>
<form method="post">
<label for="fruit">Fruit</label>
<br></br>
<select name="fruit">
<option value="cerises"<?php if(isset($_POST['fruit']) && $_POST['fruit'] == 'cerises') echo "selected"?> >Cerise</option>

<option value="bananes"<?php if(isset($_POST['fruit']) && $_POST['fruit'] == 'bananes') echo "selected"?> >Banane</option>

<option value="peches"<?php if(isset($_POST['fruit']) && $_POST['fruit'] == 'peches') echo "selected"?>>P�che</option>

<option value="pommes"<?php if(isset($_POST['fruit']) && $_POST['fruit'] == 'pommes') echo "selected"?>>Pommes</option>
<!-- SI il y a un fruit selectionn� dans le formulaire et que le fruit s�lectionn� est "pommes", s�l�ctionne le fruit "pommes"-->
</select>
<br><br>
<label for="poids" >Poids</label>
<br><br>
<input id="poids" name="poids" value='<?php if(isset($_POST['poids'])) echo $_POST['poids'];?>'  type="text">
<br><br>

<button type="submit" value="envoi">Envoyer</button>

</form>

</html>

<?php
/* 1.Cr�er un formulaire permettant de s�lectionner un fruit et saisir un poids.On doit faire apparaitre le prix dans l'url
2.traitement permettant d'afficher le prix en passant par la fonction d�clar�e calcul()
3.Faites en sorte de garder le dernier fruit et le dernier poids saisi dans le formulaire lorsqu il est valid�
*/
if($_POST){
	include('fonction.inc.php');
	echo calcul($_POST['fruit'],$_POST['poids']);
// on r�cup�re les valeurs de "name"
// Bien v�rifier les informations que j'ai mise dans la fonction	
	
	
}
	
	

?>

