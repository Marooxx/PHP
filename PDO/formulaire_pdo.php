<?php
var_dump($_POST);
$pdo = new PDO('mysql:host=localhost;dbname=entreprise','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING,PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
if($_POST){
	
$resultat = $pdo->exec("INSERT INTO employes(prenom,nom,sexe,service,date_embauche,salaire) VALUES('$_POST[prenom]','$_POST[nom]','$_POST[sexe]','$_POST[service]','$_POST[date]','$_POST[salaire]')");
// ici nous avons fait une requête d'insertion. On y entre les données issues de la base de donnée. Puis on récupère les valeurs grâce à la méthode '$pdo->exec'. On y introduit les valeurs grâce à $_POST et comme indice [ce qu'il ya dans le tag 'name']
echo $resultat.'enregistrement(s) affecté(s) par la requête INSERT';
var_dump($resultat);
}










?>

<h2>FORMULAIRE MyPDO</h2>
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