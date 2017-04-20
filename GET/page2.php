<?php
echo ' le nom de l\'article :'.$_GET['article'];// on indique l'indice dans la super globale $_GET[indice]
echo'<br>';
echo ' la couleur du jean est :'.$_GET['couleur'];
echo '<br>';
echo ' le prix est de  :'.$_GET['prix'].' euros';
echo'<br>';

foreach($_GET as $article =>$produit){// on remplace l'indice par une variable et la valeur de l'indice par une variable
	               |          |
				   indice      valeur
	echo $article.':'.$produit.'<br>';
}