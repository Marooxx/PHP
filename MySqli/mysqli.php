<?php
//mysqli est une classe prédéfinie de PHP permettant la connexion et l'éxécution de requête sur le SGBD Mysql en PHP.
$mysqli = new Mysqli("localhost","root","","entreprise");
                //(nom du server,identifiant ou pseudo,mot de passe,BDD)
/*
nom du serveur : localhost
pseudo : root
mot de passe : sous xampp , le mot de passe est vide mais sur Mac, le mot de passe est root
nom de la BDD : entreprise

$mysqli est un objet issu de la classe Mysqli, elle nous permet d'être connecté à la BDD et de formule des requêtes
*/

echo'<pre>';print_r($mysqli);echo'</pre>';
//----------------- Exemple d'erreur-----------------
//$mysqli->query// mauvaise requête volontaire
$mysqli->error."<br>";// La propriété "error" permet d'afficher une erreur si il  en a une.

echo'<hr>';
// "query() " permet d'effectuer des requêtes dans la BDD
// query() est une fonction ou méthode issu de la classe Mysqli qui nous permet de formuler et d'éxécuter des requêtes SQL
// la propriété nommée "error" de l'objet Mysqli , nous permet d'avoir accès à d'éventuelles erreurs SQL.

// REQUETE D'INSERTION
$result = $mysqli->query("INSERT INTO employes(prenom,nom,sexe,service,date_embauche,salaire) VALUES('Omar','HAMZI','m','informatique','2017-01-19','25000')");
echo $mysqli->affected_rows.'enregistrement(s) affecté(s) par la requête INSERT<br>';
var_dump($result);
/*
Dans le cas d'une bonne requête SQL,$result renverra un boolean TRUE
Dans le cas d'une mauvaise requête SQL,$result contiendra un boolean FALSE

La propriété "affected_rows" issu de l'objet $mysqli permet d'observer le nombre 
d'enregistrements affectées par la requête.
*/

//------------- REQUÊTE DE MODIFICATION---------------------  
//Exercice : modifier le salaire de l'employé 350 par 1100
$result = $mysqli->query('UPDATE employes SET salaire= 1100 WHERE id_employes = 350;');
echo $mysqli->affected_rows.'enregistrement(s) affecté(s) par la requête UPDATE<br>';
var_dump($result);

//--------------------- REQUÊTE DE SUPPRESSION------------------
$result = $mysqli->query("DELETE FROM employes WHERE id_employes = 350;");
echo $mysqli->affected_rows.'enregistrement(s) affecté(s) par la requête DELETE <br>';
var_dump($result);


// la flèche "->" sert à aller piocher des éléments dans l'objet

//--------------------------REQUÊTE DE SELECTION--------------------------
//on crée une variable de réception
$result=$mysqli->query("SELECT*FROM employes WHERE prenom='Julien'");
//on crée une autre variable de réception pour contenir $result
$employe=$result->fetch_assoc();
//fetch_assoc()-- permet transformer les données de l'objet sous forme de tableau
echo'<pre>';print_r($employe);echo'</pre>';
// on lit ce que $employe contient de manière exploitable.
// les données du tableau deviennent claires au lieu d'être des chiffres
echo"Bonjour , je suis $employe[prenom] $employe[nom] du service $employe[service] <br>";
// autre manière d'afficher le résultat
echo "Bonjour je suis".$employe['prenom'].$employe['nom']."du service".$employe['service'].'<br>';
/* ---------Commentaires ----
Nous avons prévu une variable $result juste avant la requête pour avoir un retour
Dans le cas d'une erreur de requête SQL,$result contiendra : (boolean) FALSE
Dans le cas d'une bonne  requête SQL,$result contiendra : (objet)
MYSQLIO_RESULT si la requête est bonne , on obtient un autre objet issu d'une autre classe (MYSQLI_RESULT)

fetch_assoc():
le résultat sous forme d'objet MYSQLI_RESULT n'est pas exploitable en état
La méthode 'fetch_assoc()' issu de la classe MYSQLI_RESULT permet de rendre ce résultat exploitable sous forme de tableau ARRAY associatif

$employe est donc un tableau ARRAY associatif ( associatif = avec des clés nominatives).
*/
//---------------------
$result=$mysqli->query("SELECT*FROM employes");
// on ne pas exploiter les données.
// on crée une boucle
while($employe = $result->fetch_assoc()){
	//echo '<pre>';echo print_r($employe);echo'</pre>';
	echo"Bonjour je suis $employe[prenom] $employe[nom] et je fais partie du service $employe[service]<br>";
}
	echo $result->num_rows.'enregistrement(s) récupéré(s) par la requête SELECT';
	// la boucle va tourner jusqu'à la dernière ligne de mon tableau
	
//--------------- Commentaires--------------------
/*Dans le cas d'une erreur de requête SQL,$result contiendra : (boolean) FALSE
Dans le cas d'une bonne  requête SQL,$result contiendra : (objet)
MYSQLIO_RESULT si la requête est bonne , on obtient un autre objet issu d'une autre classe (MYSQLI_RESULT)

WHILE:
Nous avons plusieurs lignes d'enregistrements. Il est donc nécessaire de répéter le traitement de la fonction(ou méthode) fetch_assoc() afin de rendre le résultat exploitable sous forme de ARRAY.
La boucle "while" permet d'afficher chaque ligne de la table ( tant que l'on possède des enregistrements , ils seront affichés).
*/

$resultat = $mysqli->query("SELECT* FROM employes ");

echo'<table border="1" style="border-collapse:collapse;"><tr>';
while($colonne = $resultat ->fetch_field()){//sert à récupérer les entêtes, les champs du tableau
	echo'<th>'.$colonne->name.'</th>';
}// la bouche va tourner tant qu'il y aura de champs
echo'</tr>';

while($ligne = $resultat->fetch_assoc()){
	echo'<tr>';
	foreach($ligne as $indice=>$informations){// foreach va  permettre de parcourir les valeurs du tableau
		echo '<td>'.$informations.'</td>';
	}
    echo'</tr>';

}
echo '</table>';
