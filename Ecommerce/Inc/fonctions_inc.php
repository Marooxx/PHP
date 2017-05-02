<?php
//******************* On va créer une fonction pour  les membres********************
// //////////// FONCTIONS MEMBRES////////////////////////////////////////////////
function executeRequete($req)
{
	global $mysqli;
	$resultat = $mysqli->query($req);
	if(!$resultat)
	{
	 die("Erreur sur la requête sql.<br>Message : " .$mysqli->error."<br>Code : ".$req );// si la requête échoue on va "mourir(die)" avec le message d'erreur	
	 // mysqli-> error permet de piocher les informations dans la variable pour savoir si il existe des erreurs 
		// avec die() , le script s'interrompt.
	
	}
	return $resultat;
	// on retourne un objet issu de la classe mysqli_result(en cas de requête SELECT, autre requête: true ou false)
}
executeRequete("SELECT*FROM produit");
/*********************************Commentaires

"global mysqli " permet d'avoir accès à la variable $mysqli définie dans l'espace global à l'intérieur de notre fonction ( espace local)

$resultat = $mysqli->query($req);==>On exécute la requête reçue en argument
*/

/////////*** FONCTION DEBUG******************************************************//
//debug($_POST);
function debug($var,$mode = 1){//$var va réceptionner et va permetter de comparer une variable
	echo '<div style="background:orange;padding:5px; float:right;clear:both;">';
	$trace = debug_backtrace();// permet de retourner des infos sur le fichier et la ligne sur lesquels ont travaille
	$trace = array_shift($trace);// va selectionner la 1ere partie du tableau
	echo"Debug demandé dans le fichier : $trace[file] à la ligne $trace[line].<hr>";
	if($mode==1){
		echo"<pre>";print_r($var);echo'</pre>';
	}
	else{
		echo"<pre>";var_dump($var);echo'</pre>';
		
	}
	echo "</div>";
}
/*///////commentaires/
Cette fonction va nous éviter d'avoir à effectuer des"print_r" et des "var_dump".
++ la fonction "debug_backtrace()" est une fonction prédéfinie retournant un tableau ARRAY contenant des infos tel que la ligne et le fichier où est éxécutée la fonction
++ "array_shift" extrait la première valeur d'un tableau et la retourne
*/





