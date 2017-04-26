<?php
// Exercice =  créer un formulaire HTML avec les champs correspondant à la table employé
// Effectuer une requête d'insertion

var_dump($_POST);
$mysqli = new Mysqli("localhost","root","","entreprise");
// cette syntax permet de se connecter à la base de donnée
//"new" permet de créér un objet
if($_POST){
	
$result = $mysqli->query("INSERT INTO employes(prenom,nom,sexe,service,date_embauche,salaire) VALUES('$_POST[prenom]','$_POST[nom]','$_POST[sexe]','$_POST[service]','$_POST[date]','$_POST[salaire]')");
// ici nous avons fait une requête d'insertion. On y entre les données issues de la base de donnée. Puis on récupère les valeurs grâce à la méthode '$mysql->query'. On y introduit les valeurs grâce à $_POST et comme indice [ce qu'il ya dans le tag 'name']
echo $mysqli->affected_rows.'enregistrement(s) affecté(s) par la requête INSERT<br>';
var_dump($result);
}
?>

<h2>FORMULAIRE MySqli</h2>
<br>
<form method='POST'>
<label for="prenom">Prenom</label>
<br>
<input  id ="prenom" type="text" name='prenom'>
<br>
<label for="nom">Nom</label>
<br>
<input id="nom" type="text" name='nom'>
<br>
<label for="sexe">Sexe</label>
<select name ='sexe'>
<option>masculin</option>
<option>feminin</option>
</select>
<br><br>

<label id="date">Date embauche</label>
<br>
<input id="date" type="text" name='date' >
<br>
<label id="salaire">Salaire</label>
<br>
<input  id ="salaire" type="text" name='salaire' >
<br>
<label for="service">Service</label>
<br>
<input name='service' type = 'text'>
<br>

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