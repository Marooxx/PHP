<?php
require_once('inc/init.php');
require_once("inc/haut_inc.php");

?>
<form method="post" action="">

<label for="pseudo">Pseudo</label><br>
<input name="pseudo" type="text" max-length ='20' id="pseudo" placehorder=" Votre pseudo"
pattern='[a-zA-Z0-9-_.]{3,20}' title="Caractères acceptés : a-zA-Z0-9-_." required="required"><br><br>
<label for="mdp">Mot de Passe</label><br>
<input name="mdp" type="password" id="mdp" required><br><br>
<input name="mdp" type="password" id="mdp" required><br><br>
<input name="mdp" type="password" id="mdp" required><br><br>
<input name="mdp" type="password" id="mdp" required><br><br>

<label for="nom">Nom</label><br>
<input name="nom" type="text" id="nom" placehorder="Votre nom"><br><br>

<label for="prenom">Prénom</label><br>
<input name="prenom" type="text" id="prenom" placehorder="Votre prénom"><br><br>

<label for="email">Email</label><br>
<input name="email" type="email" id="email"><br><br>


<label for="mdp">Mot de Passe</label><br>
<label for="mdp">Mot de Passe</label><br>
<label for="mdp">Mot de Passe</label><br>
<label for="mdp">Mot de Passe</label><br>



<?php
require_once("inc/bas_inc.php");
?>



