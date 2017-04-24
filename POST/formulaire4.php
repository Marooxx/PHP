<?php
if($_POST){// SI le bouton d'envoi a été activé , le script se lance
echo "Votre pseudo est  : ".$_POST['pseudo'].'<br>';
echo"Votre email:".$_POST['email'].'<br>';

}
echo'<pre>';print_r($_POST);echo'</pre>';


if($_POST){// SI le bouton d'envoi a été activé , le script se lance
foreach($_POST as $nom=>$valeur){
	echo $nom.':'.$valeur.'<br>';
}
}
echo'<pre>';var_dump($_POST);echo'</pre>';

/*suite exo 
Exercice : faites en sorte d'informer l'internaute qu'il faut saisir un prénom dans le cas où le champs est laissé vide*/

if($_POST){
	if($_POST['pseudo']== '' || $_POST['pseudo']== ''){
		echo 'Veuillez remplir les informations demandées';
	}
	else{
	foreach($_POST as $name =>$value){
		echo $name.':'.$value.'<br>';
	}
}
}
// Correction 
if($_POST){
	if(iconv_strlen($_POST['pseudo'] == '0') || iconv_strlen($_POST['email'] == '0')){
		echo 'champs obligatoire';
	}
	else{
		foreach($_POST as $indices=>$valeurs){
			echo $indices.':'.$valeurs."<br>";
		}
	}
}

// Imaginons que nous avons un site vitrine , nous ne possédons pas de BDD, seulement un formulaire de contact.Il serait intéressant de pouvoir récupérer la liste des emails si nous voulons envoyer une newsletter à tous nos contacts. Il existe en PHP, des fonctions qui permettent de récupérer des saisies directement dans un fichier texte. 
//Voici les fonctions : fopen(),fwrite(),fclose().
if($_POST){
$fichier = fopen('data.txt','a');// on crée une variable de réception($fichier).Puis on utilise la fonction fopen avec 2 arguments le nom du fichier texte où sera inscrit les données et le mode d'écriture
fwrite($fichier,$_POST['pseudo'].'-');// on récupère les données grâce à la fonction 'fwrite()'
fwrite($fichier,$_POST['email']."\r\n");// '\r\n' permet de passer à la ligne
fclose($fichier);
}

/* commentaires du cours 
 + fopen() en mode 'a' permet de créer un fichier texte si il n'est pas trouvé sinon de l'ouvrir
 + fwrite() permet d'écrire dans le fichier texte enregistré dans la variable $fichier
 + fclose() qui n'est pas indispensable permet de fermer le fichier texte

 Contexte d'utilisation : si l'on souhaite enregistrer des membres à une newsletter et que l'on ne possède pas de BDD . Il serait intéressant
 de le faire  via un fichier de type texte
 */


 
 
 
