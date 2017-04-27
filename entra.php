<?php

$mysqli = new Mysqli("localhost","root","","boutique");
echo '<pre>';print_r($mysqli);echo'</pre>';
echo '<pre>';print_r($_POST);echo'</pre>';

//------------- REQUÊTe INSERTION AVEC LA METHODE Mysqli-----------------
if($_POST){
	
$result = $mysqli->query("INSERT INTO produit(reference,categorie,titre,description,couleur,taille,prix,stock) VALUES('$_POST[reference]','$_POST[categorie]','$_POST[titre]','$_POST[description]','$_POST[couleur]','$_POST[taille]','$_POST[prix]',$_POST[stock]')");
// ici nous avons fait une requête d'insertion. On y entre les données issues de la base de donnée. Puis on récupère les valeurs grâce à la méthode '$mysql->query'. On y introduit les valeurs grâce à $_POST et comme indice [ce qu'il ya dans le tag 'name']
echo $mysqli->affected_rows.'enregistrement(s) affecté(s) par la requête INSERT<br>';
//var_dump($mysqli);
$mysqli->error."<br>";
var_dump($result);
}

?>

<h2>Formulaire Boutique</h2>
<br>
<form method='post'>

<br>
<label for='reference'>Reference</label>
<br>
<input name='reference' type='text'placeholder='Tapez votre référence'>
<br><br>
<label for='categorie'>Categorie</label>
<br>
<input name='categorie' type='text'>
<br><br>
<label for='titre'>Titre</label>
<input name='titre' type='text'>
<br><br>
<label for='description'>Description</label>
<br>
<textarea name="description" rows="5" cols="40"></textarea>
<br><br>
<label for='couleur'>Couleur</label>
<br>
<select name="couleur">
      <option value="bleu">Bleu</option>
      <option value="rose">Rose</option>
      <option value="beige">Beige</option>
      <option value="noir">Noir</option>
      <option value="blanc">Blanc</option>
    </select>
	<br><br>
<label for='taille'>Taille</label>
<select name="taille">
      <option value="s">S</option>
      <option value="l">L</option>
      <option value="xl">XL</option>
      <option value="2xl">2XL</option>
      <option value="3xl">3XL</option>
    </select>
	<br><br>
<label for='prix'>Prix</label>
<br>
<input name='prix' type='text'>
<br><br>
<label for='stock'>Stock</label>
<input name='stock' type='text'>
<br><br>

<button type="submit" value="envoi">Envoyer</button>
</form>

<style>

form {
    /* Pour le centrer dans la page */
    margin: 0 auto;
    width: 400px;
    /* Pour voir les limites du formulaire */
    padding: 1em;
    border: 1px solid #CCC;
    border-radius: 1em;
}

h2{
	margin: 0 auto;
}


</style>
















