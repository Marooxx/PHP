<?php
//PDO est une classe pr�d�finie de PHP permettant la connexion et l'�x�cution de requ�te sur la SGBD en PHP

$pdo = new PDO('mysql:host=localhost;dbname=entreprise','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING,PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));

// on inscrit des options en cas d'erreur
// => permet d'atteindre les options
/*
Arguments/param�tres:
1.host= nom du serveur(ici ce sera localhost)
2.dbname = nom de la base de donn�e (ici "entreprise")
3.pseudo ( ici 'root')
4.mot de passe ( ici , il n'y en pas donc on laisse vide ='')
5.options = erreur mode activ� pour faire apparaitre d'�ventuelles erreurs de requ�te SQL,encodage utf8 dans la BDD

PDO permet de se connecter � plusieurs BDD.


$pdo est une variable repr�sentant un objet issu de la classe PDO.
$pdo permet d'�tre connect� � la base et de formater des requ�tes sql_regcase
*/
echo'<pre>';print_r($pdo);echo'</pre>';

//----------------REQU�TE D'INSERTION-----------------------------------------
$resultat= $pdo->exec("INSERT INTO employes(prenom,nom,sexe,service,date_embauche,salaire) VALUES('John','COUSCOUS','m','informatique','2017-01-25','25000')");
echo $resultat.'enregistrement(s) affect�(s) par la requ�te INSERT';
// exec donne le nombre d'enregistrement
/*
exec() est une m�thode issue de la classe PDO qui permet de formuler et d'�x�cuter des requ�tes SQL
Dans le cas d'une erreur de requ�te SQL : boolean FALSE
Dans le cas d'une bonne requ�te : (INT) 1 ou N selon le nombre de r�sultats touch�s par la requ�te*/
//---------REQU�TE DE MODIFICATION-----------------------------------
// Exercice : Modifier le service des employ�s 547 par "direction"
$resultat = $pdo->exec("UPDATE employes SET service='direction' WHERE id_employes = 547");
echo $resultat.'enregistrement(s) affect�(s) par la requ�te UPDATE';
//----------REQU�TE DE SUPPRESSION-----------------------------------
// Exercice : Supprimer les employ�s faisant partie de la direction

$resultat = $pdo->exec("DELETE FROM employes WHERE service='direction'");
echo $resultat.'enregistrement(s) affect�(s) par la requ�te DELETE';

//-----------REQU�TE DE SELECTION-----------------------------
$resultat=$pdo->query("SELECT*FROM employes WHERE nom='Vignal'");
//query nous permet de r�cup�rer des donn�es
$employe=$resultat->fetch(PDO::FETCH_ASSOC);// $resultat fait partie de la classe statement
//la propri�t� fetch(PDO::FETCH_ASSOC) renvoi les indices et valeurs sous forme de ARRAY. Transforme la variable $resultat en tableau.
echo'<pre>';print_r($employe);echo'</pre>';

// Afficher le m�me r�sultat que le print_r en passant par le tableau ARRAY


	foreach($employe as $indice=>$valeurs){// foreach va  permettre de parcourir les valeurs du tableau
		echo $indice.':'.$valeurs.'<br>';
	}
// foreach est une boucle qui permet de parcourir un tableau en y indicant les indices et valeurs
/*
Nous avons prevu une variable $resultat juste avant la requ�te pour obtenir une retour
Dans le cas d'une erreur de requ�te SQL,$resultat contiendra : (boolean) FALSE
Dans le cas d'une bonne requ�te SQL , $resultat contiendra : un autre objet issu d'une autre classe PDOSTATEMENT

fetch(PDO::FETCH_ASSOC)permet de rendre exploitable un r�sultat sous forme de tableau ARRAY associatif

$employe est donc un tableau ARRAY associatif
*/

/* Exercice : selectionner toute la table des employ�s � l'aide d'une boucle while afficher successivement la phrase : 
Bonjour je suis PRENOM NOM du service SERVICE (de tous les emplo�s de l'entreprise)
*/
$result=$pdo->query("SELECT*FROM employes");
// on ne pas exploiter les donn�es. $result est un objet
// on cr�e une boucle
while($employe = $result->fetch(PDO::FETCH_ASSOC))
{/*$employe est une varaible de r�ception et devient un tableau avec la m�thode 
fetch(PDO::FETCH_ASSOC) transforme $employe en tableau
Quant � $result , elle reste un objet
*/
	//echo '<pre>';echo print_r($employe);echo'</pre>';
	echo"Bonjour je suis $employe[prenom] $employe[nom] et je fais partie du service $employe[service]<br>";
}
echo $result->rowCount().'enregistrement(s) r�cup�r�(s) par la requ�te SELECT';
/*
Nous utilisons une boucle while car nous avons plusieurs lignes d'enregistrements � r�cup�rer.

fetch(PDO::FETCH_ASSOC) permet de rendre exploitable le r�sultat sous forme de tableau ARRAY
$employe est donc un tableau ARRAY associatif


rowCount() est m�thode ou fonction issue de la classe PDOSTATEMENT permettant de 
observer le nombre d'enregistrement r�cup�r� et affich� par une requ�te.
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







