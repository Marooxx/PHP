<?php
//mysqli est une classe pr�d�finie de PHP permettant la connexion et l'�x�cution de requ�te sur le SGBD Mysql en PHP.
$mysqli = new Mysqli("localhost","root","","entreprise");
                //(nom du server,identifiant ou pseudo,mot de passe,BDD)
/*
nom du serveur : localhost
pseudo : root
mot de passe : sous xampp , le mot de passe est vide mais sur Mac, le mot de passe est root
nom de la BDD : entreprise

$mysqli est un objet issu de la classe Mysqli, elle nous permet d'�tre connect� � la BDD et de formule des requ�tes
*/

echo'<pre>';print_r($mysqli);echo'</pre>';
//----------------- Exemple d'erreur-----------------
//$mysqli->query// mauvaise requ�te volontaire
$mysqli->error."<br>";// La propri�t� "error" permet d'afficher une erreur si il  en a une.

echo'<hr>';
// "query() " permet d'effectuer des requ�tes dans la BDD
// query() est une fonction ou m�thode issu de la classe Mysqli qui nous permet de formuler et d'�x�cuter des requ�tes SQL
// la propri�t� nomm�e "error" de l'objet Mysqli , nous permet d'avoir acc�s � d'�ventuelles erreurs SQL.

// REQUETE D'INSERTION
$result = $mysqli->query("INSERT INTO employes(prenom,nom,sexe,service,date_embauche,salaire) VALUES('Omar','HAMZI','m','informatique','2017-01-19','25000')");
echo $mysqli->affected_rows.'enregistrement(s) affect�(s) par la requ�te INSERT<br>';
var_dump($result);
/*
Dans le cas d'une bonne requ�te SQL,$result renverra un boolean TRUE
Dans le cas d'une mauvaise requ�te SQL,$result contiendra un boolean FALSE

La propri�t� "affected_rows" issu de l'objet $mysqli permet d'observer le nombre 
d'enregistrements affect�es par la requ�te.
*/

//------------- REQU�TE DE MODIFICATION---------------------  
//Exercice : modifier le salaire de l'employ� 350 par 1100
$result = $mysqli->query('UPDATE employes SET salaire= 1100 WHERE id_employes = 350;');
echo $mysqli->affected_rows.'enregistrement(s) affect�(s) par la requ�te UPDATE<br>';
var_dump($result);

//--------------------- REQU�TE DE SUPPRESSION------------------
$result = $mysqli->query("DELETE FROM employes WHERE id_employes = 350;");
echo $mysqli->affected_rows.'enregistrement(s) affect�(s) par la requ�te DELETE <br>';
var_dump($result);


// la fl�che "->" sert � aller piocher des �l�ments dans l'objet

//--------------------------REQU�TE DE SELECTION--------------------------
//on cr�e une variable de r�ception
$result=$mysqli->query("SELECT*FROM employes WHERE prenom='Julien'");
//on cr�e une autre variable de r�ception pour contenir $result
$employe=$result->fetch_assoc();
//fetch_assoc()-- permet transformer les donn�es de l'objet sous forme de tableau
echo'<pre>';print_r($employe);echo'</pre>';
// on lit ce que $employe contient de mani�re exploitable.
// les donn�es du tableau deviennent claires au lieu d'�tre des chiffres
echo"Bonjour , je suis $employe[prenom] $employe[nom] du service $employe[service] <br>";
// autre mani�re d'afficher le r�sultat
echo "Bonjour je suis".$employe['prenom'].$employe['nom']."du service".$employe['service'].'<br>';
/* ---------Commentaires ----
Nous avons pr�vu une variable $result juste avant la requ�te pour avoir un retour
Dans le cas d'une erreur de requ�te SQL,$result contiendra : (boolean) FALSE
Dans le cas d'une bonne  requ�te SQL,$result contiendra : (objet)
MYSQLIO_RESULT si la requ�te est bonne , on obtient un autre objet issu d'une autre classe (MYSQLI_RESULT)

fetch_assoc():
le r�sultat sous forme d'objet MYSQLI_RESULT n'est pas exploitable en �tat
La m�thode 'fetch_assoc()' issu de la classe MYSQLI_RESULT permet de rendre ce r�sultat exploitable sous forme de tableau ARRAY associatif

$employe est donc un tableau ARRAY associatif ( associatif = avec des cl�s nominatives).
*/
//---------------------
$result=$mysqli->query("SELECT*FROM employes");
// on ne pas exploiter les donn�es.
// on cr�e une boucle
while($employe = $result->fetch_assoc()){
	//echo '<pre>';echo print_r($employe);echo'</pre>';
	echo"Bonjour je suis $employe[prenom] $employe[nom] et je fais partie du service $employe[service]<br>";
}
	echo $result->num_rows.'enregistrement(s) r�cup�r�(s) par la requ�te SELECT';
	// la boucle va tourner jusqu'� la derni�re ligne de mon tableau
	
//--------------- Commentaires--------------------
/*Dans le cas d'une erreur de requ�te SQL,$result contiendra : (boolean) FALSE
Dans le cas d'une bonne  requ�te SQL,$result contiendra : (objet)
MYSQLIO_RESULT si la requ�te est bonne , on obtient un autre objet issu d'une autre classe (MYSQLI_RESULT)

WHILE:
Nous avons plusieurs lignes d'enregistrements. Il est donc n�cessaire de r�p�ter le traitement de la fonction(ou m�thode) fetch_assoc() afin de rendre le r�sultat exploitable sous forme de ARRAY.
La boucle "while" permet d'afficher chaque ligne de la table ( tant que l'on poss�de des enregistrements , ils seront affich�s).
*/

$resultat = $mysqli->query("SELECT* FROM employes ");

echo'<table border="1" style="border-collapse:collapse;"><tr>';
while($colonne = $resultat ->fetch_field()){//sert � r�cup�rer les ent�tes, les champs du tableau
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
