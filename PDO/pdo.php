<?php
//PDO est une classe prédéfinie de PHP permettant la connexion et l'éxécution de requête sur la SGBD en PHP

$pdo = new PDO('mysql:host=localhost;dbname=entreprise','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING,PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));

// on inscrit des options en cas d'erreur
// => permet d'atteindre les options
/*
Arguments/paramètres:
1.host= nom du serveur(ici ce sera localhost)
2.dbname = nom de la base de donnée (ici "entreprise")
3.pseudo ( ici 'root')
4.mot de passe ( ici , il n'y en pas donc on laisse vide ='')
5.options = erreur mode activé pour faire apparaitre d'éventuelles erreurs de requête SQL,encodage utf8 dans la BDD

PDO permet de se connecter à plusieurs BDD.


$pdo est une variable représentant un objet issu de la classe PDO.
$pdo permet d'être connecté à la base et de formater des requêtes sql_regcase
*/
echo'<pre>';print_r($pdo);echo'</pre>';

//----------------REQUÊTE D'INSERTION-----------------------------------------
$resultat= $pdo->exec("INSERT INTO employes(prenom,nom,sexe,service,date_embauche,salaire) VALUES('John','COUSCOUS','m','informatique','2017-01-25','25000')");
echo $resultat.'enregistrement(s) affecté(s) par la requête INSERT';
// exec donne le nombre d'enregistrement
/*
exec() est une méthode issue de la classe PDO qui permet de formuler et d'éxécuter des requêtes SQL
Dans le cas d'une erreur de requête SQL : boolean FALSE
Dans le cas d'une bonne requête : (INT) 1 ou N selon le nombre de résultats touchés par la requête*/
//---------REQUÊTE DE MODIFICATION-----------------------------------
// Exercice : Modifier le service des employés 547 par "direction"
$resultat = $pdo->exec("UPDATE employes SET service='direction' WHERE id_employes = 547");
echo $resultat.'enregistrement(s) affecté(s) par la requête UPDATE';
//----------REQUÊTE DE SUPPRESSION-----------------------------------
// Exercice : Supprimer les employés faisant partie de la direction

$resultat = $pdo->exec("DELETE FROM employes WHERE service='direction'");
echo $resultat.'enregistrement(s) affecté(s) par la requête DELETE';

//-----------REQUÊTE DE SELECTION-----------------------------
$resultat=$pdo->query("SELECT*FROM employes WHERE nom='Vignal'");
//query nous permet de récupérer des données
$employe=$resultat->fetch(PDO::FETCH_ASSOC);// $resultat fait partie de la classe statement
//la propriété fetch(PDO::FETCH_ASSOC) renvoi les indices et valeurs sous forme de ARRAY. Transforme la variable $resultat en tableau.
echo'<pre>';print_r($employe);echo'</pre>';

// Afficher le même résultat que le print_r en passant par le tableau ARRAY


	foreach($employe as $indice=>$valeurs){// foreach va  permettre de parcourir les valeurs du tableau
		echo $indice.':'.$valeurs.'<br>';
	}
// foreach est une boucle qui permet de parcourir un tableau en y indicant les indices et valeurs
/*
Nous avons prevu une variable $resultat juste avant la requête pour obtenir une retour
Dans le cas d'une erreur de requête SQL,$resultat contiendra : (boolean) FALSE
Dans le cas d'une bonne requête SQL , $resultat contiendra : un autre objet issu d'une autre classe PDOSTATEMENT

fetch(PDO::FETCH_ASSOC)permet de rendre exploitable un résultat sous forme de tableau ARRAY associatif

$employe est donc un tableau ARRAY associatif
*/

/* Exercice : selectionner toute la table des employés à l'aide d'une boucle while afficher successivement la phrase : 
Bonjour je suis PRENOM NOM du service SERVICE (de tous les emploés de l'entreprise)
*/
$result=$pdo->query("SELECT*FROM employes");
// on ne pas exploiter les données. $result est un objet
// on crée une boucle
while($employe = $result->fetch(PDO::FETCH_ASSOC))
{/*$employe est une varaible de réception et devient un tableau avec la méthode 
fetch(PDO::FETCH_ASSOC) transforme $employe en tableau
Quant à $result , elle reste un objet
*/
	//echo '<pre>';echo print_r($employe);echo'</pre>';
	echo"Bonjour je suis $employe[prenom] $employe[nom] et je fais partie du service $employe[service]<br>";
}
echo $result->rowCount().'enregistrement(s) récupéré(s) par la requête SELECT';
/*
Nous utilisons une boucle while car nous avons plusieurs lignes d'enregistrements à récupérer.

fetch(PDO::FETCH_ASSOC) permet de rendre exploitable le résultat sous forme de tableau ARRAY
$employe est donc un tableau ARRAY associatif


rowCount() est méthode ou fonction issue de la classe PDOSTATEMENT permettant de 
observer le nombre d'enregistrement récupéré et affiché par une requête.
*/

//

$result = $pdo->query("SELECT*FROM employes");

echo"<table border='1' style='border-collapse:collapse';><tr>";

for($i=0;$i<$result->columnCount();$i++)
{
	$colonne = $result->getcolumnMeta($i);
	echo '<th>'.$colonne['name'].'</th>';
}
echo '</tr>';

while($ligne = $result->fetch(PDO::FETCH_ASSOC)){
	echo '<tr>';
	foreach($ligne as $indice=>$informations){
		echo '<td>'.$informations.'</td>';
	}
	echo '</tr>';
}
echo '</table>';















?>







