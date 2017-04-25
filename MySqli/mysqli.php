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


