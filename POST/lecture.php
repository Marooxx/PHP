<?php
// POUR TRANSFORMER LES DONNEES RECOLTEES SOUS FORME DE TABLEAU

$nom_fichier = "data.txt";
$data = file($nom_fichier);// j'éxécute la fonction 'file()' qui va créer un tableau
 echo'<pre>';print_r($data);echo'</pre>';
 /* la fonction 'file() retourne chaque ligne d'un fichier à des indices différents
 d'un tableau ARRAY
 */
 

	 // Grâce à la boucle foreach on peut afficher les valeurs d'un tableau
	foreach($data as $name =>$value){
		echo $name.':'.$value.'<br>';
	 }
	
	echo "<hr>";
	
	echo implode($data,"<br>");// affichage des valeurs uniquement  dans un tableau ARRAY avec un saut de ligne
 