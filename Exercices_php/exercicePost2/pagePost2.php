<?php
if($_POST){// SI le bouton d'envoi a été activé , le script se lance
echo "Marque : ".$_POST['marque'].'<br>';
echo"Couleur:".$_POST['couleur'].'<br>';
echo"Modèle :".$_POST['modele'].'<br>';
echo"le nombre de km :".$_POST['km'].'<br>';
echo"le prix:".$_POST['prix'].'<br>';
echo"Carburant:".$_POST['carburant'].'<br>';
echo"Puissance:".$_POST['puissance'].'<br>';
echo"Options:".$_POST['option'].'<br>';



}
echo'<pre>';print_r($_POST);echo'</pre>';
?>
