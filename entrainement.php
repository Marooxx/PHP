<style>h2{margin:0; font-size: 15px;color:red;}></style><h2> Ecritures et affichage</h2>
<!-- Nous pouvons écrire du HTML dans un fichier ayant l'extension PHP,l'inversen'est pas possible  -->
<!-- nous ne sommes pas obligé de fermer la balise php  -->
<?php
echo '<br>';
echo "Bonjour";//echo est une instruction d'affichage,nous pouvons le traduire par "affiche moi"
echo '<br>';// nous pouvons également y mettre du html
echo 'Bienvenue';//si vous vous rendez sur le code source,vous ne verrez pas le php car le langage est interprété.
echo '<hr><h2>Commentaires</h2>';
?>
<strong>Bonjour </strong>
<!--Nous voyons qu'il est également possible de fermer et ré-ouvrir php pour mélanger du code PHP&HTML  -->
<?php
echo "<br>";
echo "Texte";// ceci est un commentaire sur une seule ligne
echo "Texte";# ceci est un commentaire sur une seule ligne
echo "Texte";/* ceci est un commentaire sur
plusieurs ligne*/
echo "<br>";
print'Nous sommes mardi';// print sert à afficher.print est une autre instructiond'affichage.Il n'y a pas de différence avec "echo".
//-------------------------------------------------------
echo '<hr><h2>Variables:types/déclaration/affectation</h2>';
// une variable est un espace nommé permettant de conserver une valeur
// la variable est appelé en utilisant le "$"
$a = 127;
/* déclaration d'une variable toujours avec le signe $ suivi de son nom
jamais d'accent et d'espace et jamais de chiffre après le signe $.
$2a--> mauvaise synthaxe ** $a2-->bonne synthaxe.
C'est nous qui définissons le nom de la variable*/
$a=127;#affectation de la valeur 127 dans la variable nommée"a"
echo gettype($a);//gettype est une fonction prédéfinie nous permettant de voir le type d'une variable. il s'agit d'un entier : integer
echo "<br>";
$b = 1.5;
echo gettype($b);// un nombre à virgule : double
echo "<br>";
$c = 'Une chaîne';
// gettype renvoie le type de variable que l'on utilise
echo gettype($c);//là non plus , nous ne regardons pas le contenu d'une variable mais son type :string;
echo '<br>';
$d = '127';
echo gettype($d);// String entre '' l'interpéteur considère que  c'est une chaîne de caractère.
echo '<br>';
$e = true;
echo gettype($e);// boolean
echo '<br>';

$f = false;
echo gettype($f);// boolean
//*****************************************************************
echo "<hr><h2>Concaténation</h2>";
$x = 'bonjour ';
$y = 'tout le monde';
echo $x.$y.'<br>';// point de concaténation que l'on peut traduire par "suivi de"
echo "$x $y <br>";// même chose sans la concaténation , entre guillemets,les variables sont évaluées
echo'Hey! '.$x.$y;// concaténation texte et variable
echo "<br>",'coucou','<br>';//concaténation avec la virgule ( la virgule et le point de concaténation sont similaires)
 //*****************************************************************
 echo '<hr><h2> Concaténation lors de l\'affectation</h2>';
 $prenom1 = 'Bruno';// affectation de la valeur "Bruno" sur la variable $prenom1
 $prenom1 = 'Claire';// affectation de la valeur "Claire" sur la variable $prenom1
 echo $prenom1.'<br>';//affiche "Claire",cela remplace "Bruno" par "Claire"

 $prenom2 = "Nicolas";// affectation de la valeur 'Nicolas' sur la variable $prenom2
 $prenom2 .= "Marie";// affectation de la valeur 'Marie' sur la variable $prenom2
 echo $prenom2 . '<br>';//  affiche "Nicolas Marie"... cela ajoute SANS remplacer la valeur précédente grâce à l'opérateur '.='
 //*********************************************************************
 echo '<hr><h2>Guillemet et Quotes</h2>';
 $message = "aujourd'hui";
 $message = 'aujourd\' hui';// il faut mettre l'anti slash pour éviter une erreur avec le signe ''
 $txt = 'Bonjour';
 $txt . 'tout le monde'. '<br>';//concaténation
echo "$txt tout le monde<br>";// Affichage dans les guillemets, la variable est évaluée
echo '$txt tout le monde'; // affichage dans des quotes, la variable n' est pas évaluée
// ***********************************************************************************
echo '<hr><h2> Constante et Constante magique </h2>';
define("CAPITALE","Paris");/* on ne peut pas changer la valeur d'une constante-- Une constante ,tout comme une variable permet de conserver une valeur sauf que comme son nom
l'indique , la valeur est constante! C'est à dire que l'on ne pourra pas la changer durant l'éxecution du script.Contrairement à une variable qui elle peut varier*/
echo CAPITALE . '<br>';
// par convention, une constante se déclare toujours en majuscule.

// Constante magique
echo__FILE__. "<br>";// indique le chemin complet du fichier en cours d'utilisation
echo__LINE__. "<br>";// indique le numéro de la ligne sur laquelle on se trouve
//-----------------------------------------------------------------------------------------
// Exercice : afficher BLEU-BLANC-ROUGE ( avec les tirets)en mettant chaque couleur dans une variable
$bleu = 'BLEU ';
$blanc = 'BLANC ';
$rouge ='ROUGE';

echo "$bleu - $blanc - $rouge<br>";
echo $bleu .'-'.  $blanc . '-' . $rouge.'<br>';
// Concaténation par affectation
$couleur = "BLEU-";
$couleur .= "BLANC-";
$couleur .= "ROUGE";
 
 //*********************************************************************
 
 echo'<hr><h2> Opérateurs arithmétiques</h2>';
 
 $a = 10;
 $b = 2;
 echo $a + $b . '<br>';// affiche 12
 echo $a - $b .'<br>'; // affiche 8
 echo $a *$b.'<br>';// affiche 20
 echo $a /$b .'<br>';// affiche 5
 
 // Opération / affectation
 $a = 10;
 $b = 2;
  $a += $b;// equivaut à $a = $a + $b
  echo $a .'<br>';
  $a -=$b .'<br>'; // équivaut à $a = $a(=12) - $b ($a = 12 - 2)
  $a *=$b .'<br>'; //équivaut à $a = $a * $b ($a = 10*2)
  $a /= $b. '<br>';// équivaut à $a = $a/$b ($a = 20/2)
  // A chaque fois , on redéfinie la valeur de la variable $a/$b
  //************************************************************************
  echo '<hr><h2> Sructures conditionnelles (if/else) - opérateurs de comparaison</h2>';
  /*
  Opérateurs                           Signification                            
  =                                     est égale
  ==                                    comparaison de valeur
  ===                                   comparaison de valeur et de type
  !=                                    différent de
  !                                     n'est pas
  >                                     strictement supérieur
  <                                     strictement inférieur
  <=                                    inférieur ou égale
  >=                                    supérieur ou égale
  &&/AND                                et
  ||/OR                                 ou
  XOR                                   ou exclusif
 */
// isset() et empty()
// isset teste si c'est défini ---------- empty teste si c'est vide
// EMPTY()

$var1 = false;
$var2 = "";// chaîne vide
// différence entre empty et isset : si on met la var2 en commentaire , on ne passe plus dans le "if isset", mais on continue de rentrer dans le "if empty".
if (empty($var1))
{ echo'0,vide ou non définie <br>';// false vaut 0
// empty teste si c'est 0,vide ou défini
	
}


// ISSET()
if(isset($var2)){
	echo 'var2 existe et est définie par rien<br>';
}// isset ()teste l'existence  de $var2 , si elle a été déclaréee ou non
// --------------------------------------EXERCICES ---------------------------------------------------------------
$a = 10;
$b = 5;
$c = 2;

if($a>$b)
{
	echo " A est bien supérieur à B";
}
else{
	echo "Non, c'est B qui est supérieur à A";
	
}
echo '<br>';
//----------------------------------------------------------------------------------------------------------
 if($a >$b && $b>$c)
 {// si A est supérieur à B et que B est supérieur à C
	 echo "ok pour les 2 conditions<br>"; // instruction d'affichage.
 }
if($a == 9 || $b>$c){    // si la valeur de A est égal à 9 OU que B est supérieur à C , le double '=' permet de comparer les valeurs à l'intérieur de la variable
	 echo "ok pour au moins l'une des 2 conditions <br>";
 }
 else{// cas par défaut
	 echo "Nous sommes dans la condition suivante <br>";// instruction d'affichage
 }

// malgré que la 1er condition soit validée , le programme évalue la seconde condition.

//-------------------------------------------------------------------------------------------
if($a == 8){
	echo "1 - A est égal à 8 <br>";
}
elseif($a !=10){
	echo"2- A est différent de 10 <br>";
}
else{
	echo "3 - Tout le monde a faux <br>";
}

//----------------------------------------
if($a == 10){
	echo "1- A est égal à 10<br>";
}
elseif($c == 2){
	echo "2 - C est égal à 2 <br>";// avec elseif , le programmme arrête de progresser si la condition est bonne donc true sinon il continue

}
elseif($b == 5){
	echo "2 - C est égale à 2";
	}
else {
	echo "3- tout le monde à faux";
}
//------------------------------------------------------------------------------

if($a == 8){ // si la valeur de A est égal à 8
	echo "1- A est égal à 10<br>";// instruction d'affichage
}
elseif($a != 10){// sinon si A est différent de 10
	echo "2 - A est différent de 10 <br>";// instruction de affichage

}
else { // sinon cas par défaut
	echo "3- tout le monde à faux <br>";
}
// avec des "elseif , si la condition est respectée , le script s'arrête et les conditions suivantes ne sont pas évaluées. Au contarire , en posant plusieurs "if", elles seront toute évaluées même si les conditions précédentes sont respectées.
// CONDITIONS EXCLUSIVES

if($a == 10 XOR $b == 7){ //Avec le XOR il faut qu'une des 2 conditions soit bonne pour déclencher le script
	echo " Les conditions sont respectées<br>";
}
// si les 2 conditions sont bonnes ou mauvaises , nous ne rentrerons pas dans la condition suivante
else{
	echo " les deux conditions ne sont pas remplies<br>";
}

//---------------------------------------------------------------------------------------------------------
// Forme contractée : 2eme possibilité d'écriture des "if"
echo ($a == 10) ? "A est égale à 10":"A n'est pas égale à 10";
// ici, le '?' remplace le if et ':' le else. Il n' y a pas de elseif dans la forme contractée

//*********************************************************
// Comparaison
$vara = 1;
$varb = "1";
echo gettype($vara). '<br>';
echo gettype($varb).'<br>';
if($vara === $varb){
	echo "il s'agit de la même chose <br>";
}
// Avec la présence , le tripe '=', le test ne fonctionne pas car les types de variables sont différents. On a pour la var a un integer (INT), un entier et une varb est une chaîne de caractères (STRING)
// rappel 
// = affectation
// == comparaison de valeur -- sert à comparer 2 valeurs
// === comparaison de la valeur et du type -- sert à comparer les valeurs et le types

// *******************************************************
echo '<hr><h2> Conditions SWITCH</h2>';

$couleur = 'jaune';
switch($couleur){// les 'case' représente des cas différents dans lesquel nous pouvons potentiellement tomber
	case 'bleu':
	echo " vous aimez le bleu";
	break;// le break arrête le script si la condition est 'true'
	case 'rouge':
	echo " vous aimez le rouge";
	break;// le 'break' permet d'interrompre le script si nous rentrons dans un des cas
	case 'vert':
	echo " vous aimez le vert";
	break;
	default:
	echo " vous aimez le jaune <br>";
	break;
	
}
 //----------------------------------------------EXERCICES-----------------------------------------
 // Pouvez vous faire la même condition switch avec des if/else? Est ce possible?
 $couleur = 'jaune';
 
 if($couleur == 'bleu'){
	 echo'vous aimez la couleur bleu <br>';
 }
 elseif($couleur == 'rouge'){
	 echo ' vous aimez la couleur rouge <br>';
 }
 elseif($couleur == 'vert'){
	 echo ' vous aimez la couleur verte <br>';
	 
 }
 else{
	 echo ' Vous aimez la couleur jaune <br>';
 }

 
 
