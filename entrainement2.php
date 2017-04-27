<?php
/* Exercice





Afficher sous forme de tableau HTML l'ensemble de la table(nom des champs /colonnes + contenu)
Si le champs "reference" est laissé vide lors de l'ajout d'un produit, afficher un message d'erreur sinon enregistrer le produit

si le champs "titre " fait moins de 3 caractères ou plus de 20 caractères , indiquer à l'internaute d'insérer un titre de taille correcte sinon enregistré le produit

Afficher un message lorsqu'un produit a bien été enregistré
*/


var_dump($_POST);
$pdo = new PDO('mysql:host=localhost;dbname=entreprise','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING,PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
if($_POST){
	
$resultat = $pdo->exec("INSERT INTO employes(prenom,nom,sexe,service,date_embauche,salaire) VALUES('$_POST[prenom]','$_POST[nom]','$_POST[sexe]','$_POST[service]','$_POST[date]','$_POST[salaire]')");
// ici nous avons fait une requête d'insertion. On y entre les données issues de la base de donnée. Puis on récupère les valeurs grâce à la méthode '$pdo->exec'. On y introduit les valeurs grâce à $_POST et comme indice [ce qu'il ya dans le tag 'name']
echo $resultat.'enregistrement(s) affecté(s) par la requête INSERT';
var_dump($resultat);
}
?>

<h2>Formulaire Boutique</h2>
<br />
<form method="post">

<br />
<label for="reference">Reference</label>
<br />
<input name="reference" type="text"placeholder="Tapez votre référence">
<br /><br />
<label for="categorie">Categorie</label>
<br />
<input name="categorie" type="text">
<br /><br />
<label for="titre">Titre</label>
<input name="titre" type="text">
<br /><br />
<label for="description">Description</label>
<br />
<textarea name="description" rows="5" cols="40"></textarea>
<br /><br />
<label for="couleur">Couleur</label>
<br />
<select name="couleur">
      <option value="bleu">Bleu</option>
      <option value="rose">Rose</option>
      <option value="beige">Beige</option>
      <option value="noir">Noir</option>
      <option value="blanc">Blanc</option>
    </select>
	<br /><br />
<label for="taille">Taille</label>
<select name="taille">
      <option value="s">S</option>
      <option value="l">L</option>
      <option value="xl">XL</option>
      <option value="2xl">2XL</option>
      <option value="3xl">3XL</option>
    </select>
	<br /><br />
<label for="prix">Prix</label>
<br />
<input name="prix" type="text">
<br /><br />
<label for="stock">Stock</label>
<input name="stock" type="text">
<br /><br />

<input type="submit" value="envoi">
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
<?php
//****************************CORRECTION****************************************
// voir boutique.zip

