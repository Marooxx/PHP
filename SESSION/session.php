<?php
/*
une session est un systeme mis en place dans le code PHP, permettant de conserver sur le serveur au sein d'un fichier temporaire, des informations relatives à un internaute

L'avantage d'une session , est que les données collectées seront enregistrées dans un fichier sur le serveur disponible et consultable par toutes les pages durant toute la navigation de l'internaute
*/

session_start();// fonction permet de créér un fichier session et d'ouvrir une session
$_SESSION['pseudo'] =1230;
$_SESSION['nom'] = 5800;
// pour rappel,$_SESSION est une super globale de type ARRAY
echo'<pre>';print_r($_SESSION);echo'</pre>';
unset($_SESSION['nom']);// La fonction unset() permet de vider une partie en selectionnant l'indice du tableau 
echo'<pre>';print_r($_SESSION);echo'</pre>';

session_destroy();// supprime totale la session
echo'<pre>';print_r($_SESSION);echo'</pre>';
// la session permet de rester connecter