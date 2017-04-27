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
echo __FILE__. "<br>";// indique le chemin complet du fichier en cours d'utilisation
echo __LINE__. "<br>";// indique le numéro de la ligne sur laquelle on se trouve
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
 if($a >$b && $b>$c)// il faut que les 2 conditions soient remplies
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
	case 'bleu'://'bleu' est l'une  des valeurs possibles de la variable $couleur
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
 //*****************************************************************************************************
 echo '<hr><h2> Sructure itérative : boucles</h2>';
 
 $i = 0;// initialiser  une boucle -- valeur de départ
 while($i<3){// TANT QUE la condition est respectée -- Tant que $i est inférieur à 3
	 echo $i.'<br>';
	 $i++;// ceci est une forme contractée de : $i = $i+1
 }// 
 
 //-------------------------- EXERCICE -----------------------------------------------------------
 // faites en sorte de ne pas avoir les tirets à la fin :
 // 
 $i = 0;
 while($i<3){// tant que $i est inférieur à 3
	 if($i == 2){
		 echo $i;// si je rentre 1 fois ici
	 }
	 else{
		 echo "$i---";// cas par defaut si la valeur ne rentre pas dans le 'if'. je rentre 2 fois par ici 
	 }
	 $i++;// incrémentation du "compteur" pour que la boucle puisse tourner
 }
 //***REMARQUES PERSOS 
 
 //entre 0 et 1 , on entre dans le else car la valeur n'est pas égale à 2
 // puis à 2 on applique le if car la valeur de $i est égale à 2
 
 // boucle 'FOR'
 echo'<br>';
 
 for($j = 0 ; $j <16 ; $j++){// (valeur de départ ;condition d'entrée;incrémentation)
	 echo 'yes'.'<br>';
 }

//------------- TP-----------------------
// afficher 30 options via une boucle
echo '<select>';
echo'<option></option>'; 
echo '</select>';

// on évolue de manière croissante
echo '<select>';
for($o = 0 ; $o <= 30; $o++)
{
	echo "<option>$o</option>";
}
echo '</select>';

// on évolue  de manière décroissante
 echo '<select>';
for($o = 30; $o > 0; $o--)
{
	echo "<option>$o</option>";
}
echo '</select>';

//-----------------------création d'une ligne de tableau-------------------------------------
echo "<table  border ='1' style='border-collapse:collapse;' >";
echo "<tr>";
for($o=0;$o <10; $o++){
	echo "<td>$o</td>";
}
echo"</tr>";
echo"</table>";
//--------------- création de tableau avec une boucle imbriquée ------------------------------

echo "<table  border ='1' style='border-collapse:collapse;' >";
for($ligne =0 ; $ligne <10 ; $ligne++){// on doit prévoir le nombre de ligne à créer que l'on souhaite avant de lancer la balise <tr> et la boucle
	echo '<tr>';
// 2eme boucle imbriquée
for($cellule= 0;$cellule <10; $cellule++){
	echo "<td>".(10*$ligne+$cellule)."</td>";
	}
	echo '</tr>';
}
echo"</table>";
// 2eme solution 

$compteur = 0;// on crée une variable pour afficher le n° de cellule
 echo "<table  border ='1' style='border-collapse:collapse;' >";
for($ligne =0 ; $ligne <10 ; $ligne++){// on doit prévoir le nombre de ligne que l'on souhaite créer avant de lancer la balise <tr>
	echo '<tr>';
// 2eme boucle imbriquée
for($cellule= 0;$cellule <10; $cellule++){
	echo "<td>".$compteur."</td>";$compteur++;
	}
	echo '</tr>';
}
echo"</table>";

 //**********************************************************************************
 echo'<hr><h2>FONCTIONS PREDEFINIES</h2>';
 // une founction prédéfinie permet de réaliser un traitement spécifique.On peut consulter le doc sur php.net.
 echo '<br>Date : <br>';
 echo date ("d/m/Y");//  exemple de la fonction prédéfinie permettant de renvoyer la date. le 'Y' majuscule permet d'obtenir '2017' alors que le 'y' minuscule affiche '17'
 // Quand on utilise une fonction prédéfinie , on doit toujours se demander ce que l'on doit lui envoyer comme argument/paramètres pour qu'elle s'éxécute et ce qu'elle peut retourner
 //-------------------------------------------------------------------------
 echo'<hr><h2>Fonctions prédéfinies : traitement des chaînes</h2>';
 $email ="omar.hamzi@lepoles.com";// on pose un argument
 echo strpos($email,"@");// permet de savoir où se trouve la position d'un caractère
 $email2 = "Bonjour";
 echo strpos($email2,"@");// cette ligne ne retourne rien pourtant, elle retourne FALSE.
 echo'<br>';
 var_dump(strpos($email2,"@"));
 echo'<br>';
 /* var_dump sert au débuggage.Grâce à cette fonction , on peut apercevoir le FALSE si le caractère est "@" n'est pas trouvé(de trouver des éléments masquer). var_dump est une instruction améliorée d'affichage que l'on utilise régulièrement en phase de développement
// "strpos()" est une fonction prédéfinie permettant de trouver la position d'un caractère dans une chaîne:
// Succes : int(entier)
// échec: boolean
/* argument(s):
1.Nous devons lui fournir la chaîne dans laquelle nous souhaitons chercher
2.Nous devons lui fournir l'information à chercher.
Contexte : nous pourrons l'utiliser pour savoir si une adresse email à un format conforme.*/
 
// REMARQUE : echo strrpos($email,"m");// affiche le dernier caractère de la variable $email
 
 //------fonction pour calculer la taille d'une chaîne de caractère---------------------------------------------------------------
 
 $phrase = " hello world";
 echo iconv_strlen($phrase);
 echo '<br>';
 // iconv_strlen() compte le nombre d'éléments dans la chaîne de caractère
 /* iconv_strlen() est une fonction prédéfinie permettant de retourner la taille d'une chaîne de caractère:
 succes: renvoie un chiffre ou int(entier)
 echec : renvoie un boolean (FALSE) 
 Nous devons lui fournir, en ragument, la chaîne dans laquelle nous souhaitons connaître la taille
 contexte : nous pourrons l'utiliser pour savoir si le pseudo et le mot de passe ont des tailles conformes lors d'une inscription.*/
 
 //------------------------------------------------------------------------
 
$texte= "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt arcu et libero consectetur tempor. Curabitur libero nunc, gravida hendrerit nisl hendrerit, rutrum rutrum risus. Nulla a aliquam arcu. Mauris at velit sit amet orci laoreet placerat. Fusce cursus dui eu sapien faucibus, a porta purus pellentesque. Mauris eu quam vitae est sagittis vehicula. Vestibulum a ligula vel tortor sollicitudin porta nec at lacus. Vestibulum fermentum tempus turpis sed ultricies. Nam tincidunt erat a laoreet hendrerit. Nullam in turpis id ex rhoncus bibendum. Vestibulum maximus convallis nibh in interdum. Etiam congue velit nisl, et dignissim sem interdum vitae.

Nullam fringilla molestie quam nec facilisis. Integer sit amet porta sem. Cras sed vulputate ligula, sit amet laoreet nibh. Donec mi metus, maximus ac consectetur eget, sodales vel sem. Proin vel tellus arcu. Integer tellus risus, maximus nec dictum ut, eleifend vitae lacus. Sed cursus lobortis scelerisque.";


echo substr($texte,0,20)."...<a href=''>Lire la suite</a>";
echo '<br>';
/* surbstr() est une fonction prédéfinie permettant de retourner une partie de la chaine de caractère
En cas de succes = affiche un chiffre
En cas d'échec = affiche FALSE 
Arguments:
1.Nous devons lui fournir la chaine que l'on souhaite couper
2.Nous devons lui préciser la position du début 
3.Nous devons lui préciser la position de fin
Contexte:
substr()est souvent utiliser dans l'affichage des actualités avec une "accroche"*/
//******************************* FONCTIONS UTILISATEURS*****************************************
echo "<hr><h2>Fonctions utilisateurs</h2>";

function separation(){// déclaration d'une fonction ici sans arguments.
	echo"<hr><hr><hr>";// a l'intérieur on précise les instructions que le script doit appliquer
}
separation();// ne pas oublier les parenthèses lorsqu'on appelle la fonction. Pas besoin de "echo" pour appeller une fonction
// les fonctions qui ne sont pas prédéfinies dans le langage sont déclarées puis éxécutées par l'utilisateur
//Nous aurions pu donner un autre nom à cette fonction. C'est au développeur de donner une fonction
//------------------------------------fonctions utilisateurs avec arguments-----------------------------------------------------------
 function bonjour($qui){// fonction affectée d'une variable neutre, une variable dite "de réception". 
	 echo "Bonjour $qui <br>";// instructions à éxécuter
 }
 bonjour('Pierre');// ici, la variable en paramètre a pris la valeur "Pierre". On lui a stocké une donnée quelconque
$prenom = 'Stevy';
bonjour($prenom);// on peut aussi y assigné une variable et afficher ce qu'elle contient
// les arguments sont des paramètres fournis à la fonction et lui permettent de compléter ou modifier son comportement initialement prévu
//----------------------
function tva($nombre){
	return $nombre*1.2;// 'return' permet de retourner une  valeur et d'arrêter le script
}
echo tva(150);// pour éxécuter la fonction , on place un "echo" puisque l'on utilise le mot clé "return" au sein de la fonction
// calcul du taux de tva à 20% --> (1+20/100)
// une fonction peut retourner quelque chose ( à ce moment là , on quitte la fonction)

// Exercice : Pourriez vous améliorer cette fonction afin que l'on puisse calculé un nombre avec le taux de notre choix
function taux_tva($nombre,$taux){// on peut appliquer plusieurs paramètres
	return $nombre* (1+$taux/100);// calcul du taux tva = 1+x/100 donc on remplace n'importe quels nombres à la place de "x"ou '$taux'
}
echo taux_tva(150,20);
echo'<br>';
// attention nous ne pouvons pas nommer une fonction de la même manière
//----------------------------------------------------------------------
meteo("hiver",15);// on peut déclarer une fonction avant même de l'avoir déclarée
function meteo($saison,$temperature){// avec 2 arguments à réceptionner et par conséquent à envoyer
	echo "Nous sommes en $saison et il fait $temperature degrés <br>";
}

// Exercice : Gérer le s de degrés avec un if/else
	function meteo1($saison,$temperature){
		if($temperature<0){
			echo "Nous sommes en $saison et il fait $temperature degrés";
		}
	elseif($temperature<=1){
		echo"Nous sommes en $saison et il fait $temperature degré";
		}
	else{
		echo"Nous sommes en $saison et il fait $temperature degrés";
		
	}
	}
	echo meteo1("été",-15);
	
	//correction exercice
	function exOmeteo($saison,$temperature){
		echo "Nous sommes en $saison et il fait $temperature ";
		if($temperature >1 || $temperature<-1){
			echo"degrés";
		}
		else{
			echo "degré";
		}
	}
	
	echo exOmeteo("hiver",-4);
	echo'<br>';
	
//--------------------------------------------------------
$pays = "France";
function affichagePays(){
	global $pays;// le mot-clé "global" permet d'appeler ma variable à l'intérieur de ma fonction et de pouvoir l'utiliser
	echo $pays;
	/* le 'echo' qui suit ne fonctionne pas si nous n'avions pas mis le mot clé "global" pour importer tout ce qui est déclaré dans l'espace local(à l'intérieur de la fonction). Tout ce qui est à l'extérieur d'une fonction s'appelle l'espace global.*/ 
	
}
 affichagePays();
 echo '<br>';
 //------------------- ----------------------------
 function jourSemaine(){
	 $jour = 'Lundi';// variable locale
	 return $jour;// avec le "return" on sort de la fonction
	 echo 'ALLO';
 }// le "echo " ne sera pas pris en compte car on sort de la fonction avec "return"
 //echo $jour; ne fonctionne pas car cette variable n'est connue qu'à l'intérieur de la fonction ( donc en espace locale)
echo jourSemaine();// on éxécute la fonction ici
//**************************************************************************************************************
        echo'<hr><h2> TABLEAU DE DONNEES ARRAY</h2>';
	/*
	un tableau est déclaré un peu comme une variable améliorée , car nous ne conservons pas qu'une valeur mais un 
	ensemble de valeur
	*/
	
	$liste = array("Grégory","Nathalie","Emile","Luffy");
	echo $liste;// Ne fonctionne pas , on ne peut pas passer par un "echo"classique pour voir le contenu de notre tableau Array
	var_dump($liste);// la fonction permet de voir ce qu'il y a dans la variable ainsi que le type d 'éléments dans le tableau
	echo '<pre>';var_dump($liste);echo'</pre>';// si on souhaite plus de détail concernant un tableau
	echo '<pre>';print_r($liste);echo'</pre>';// pour avoir une vision plus simple des données d'un tableau
// Contexte : Bien souvent, lorsque l'on récuperera des informations en BDD,nous les retrouverons sous forme d'ARRAY
// la table ARRAY permet de stocker plusieurs données contrairement à une variable
//----------------------------------------------------------------------------------
echo '<hr><h2>boucle foreach pour les tableaux de données ARRAY</h2>';
$tab[] = 'FRANCE';
$tab[] = 'ITALIE';
$tab[] = 'ESPAGNE';
$tab[] = 'BRESIL';
$tab[] = 'FIDJI';
echo '<pre>'; print_r($tab); 
echo'</pre>';
// Exercice : tenter d'extraire de sortir et d'afficher "Italie" en passant par le tableau
echo $tab[1];// on va rechercher la valeur de l'indice 1 dans la variable $tab
echo'<hr>';
//la boucle 'foreach(.. as..)' permet de parcourir tout le tableau et n'est utilisable que dans ce cas
foreach($tab as $info){// $info est une variable de réception- Elle va permettre d'afficher les valeurs du tableau
echo $info;
echo '<br>';
// le mot "as" fait partie du langage et est OBLIGATOIRE.	
}

// une fois que la boucle foreach(..as..) a terminé de parcourir le tableau , le script s'arrête
// la boucle "foreach..as..." est un moyen simple de passer en revue un tableau.
//foreach() fonctionne uniquement dans les tableaux.Elle retournera une erreur si on tente de l'utiliser sur une variable d'un autre type.

echo'<hr>';
foreach($tab as $indices =>$valeur){//=> on demande d'extraire les valeurs de la variable $indices
	echo $indices.':'.$valeur.'<br>';
}
// Lorsqu'il y a 2 variables, la 1ere parcours la colonne des indices et la 2nd parcours la colonne des valeurs

$couleur=array("j" =>"jaune","v"=>"vert","r"=>"rouge","o"=>"orange");//=> permet d'affecter une valeur à nos indices. On peut donc choisir les indices à affecter à nos valeurs
echo'<pre>';print_r($couleur);echo'</pre>';
//------------ Compter la taille de lignes dans un tableau-------------------------------------
echo'taille du tableau :'.count($couleur).'<br>';// affiche le nombre d'éléments dans un tableau. Ici 4
echo 'taille du tableau : '.sizeof($couleur).'<br>'; // idem que count()

echo implode("-",$couleur).'<br>';// implode() permet d'afficher les valeurs d'un tableau
// implode() est une fonction prédéfinie qui permet de rassembler les éléments d'un tableau en une chaîne(séparé par un symbole)

//------------------------------------TABLEAUX Multidimensionnels-------------------------------------------
echo'<hr><h2>Tableau multidimensionnel</h2>';
//Nous parlons de tableau multidimensionnel quand un tableau est contenu dans un tableau


$tab_multi = array(0=>array("prenom"=>"Omar",'nom'=>'HAMZI'),1=>array("prenom"=>'Luffy','nom'=>'Monkey. D'));
echo '<pre>';print_r($tab_multi);echo '</pre>';
// exercice: tenter de sortir et d'afficher le nom du tableau multidimensionnel sans faire "echo Luffy"
echo $tab_multi[1]['nom'];// on indique le 1ere indice puis le second indice pour afficher le 'nom'
//---------------------SUPER GLOBALES-------------------------------------------------------------
echo '<hr><h2>LEs super globales</h2>';
/*les super globales permettent de stocker des informations
les super globales sont des variables array , internes et prédéfinies par PHP, qui sont toujours disponibles
quelque soit le contexte.

Pour rappel, une variable array permet de conserver un ensemble de valeurs.
Lorsque l'on parle de disponibilité , on exprime le fait que les super globales sont à la fois disponibles dans l'espace globale( espace par défaut dans php) mais aussi dans l'espace local(dans une fonction).

$_GET-- permet de récupérer des infos dans l'url-- contient des informations fournies en paramètre via la method GET par l'url.

$_POST -- permet de récupérer des infos dans les formulaires-- contient des informations fournies par un formulaire via la method POST

$_SERVER -- permet de récupérer des infos issues des serveurs-- contient toutes les informations fournies par le serveur web

$_FILES -- contient des infos dans des photos -- contient les informations liées à l'upload d'un (ou plusieurs) fichier(s) par un formulaire

$_COOKIE -- permet de récupérer des infos conservées dans un navigateur -- contient des informations fournies par le fichier cookie

$_SESSION -- permet de récupérer des infos lors de notre navigation -- contient des informations de la session en cours
*/

echo '<pre>';print_r($_SERVER);echo'</pre>';

//****************OBJETS****************************************************************************************************************************
echo'<hr><h2>Objets</h2>';
// Un objet est un autre type de donnée à la manière d'un ARRAY.Il permet de regrouper une certains nombres d'informations. Cependant,cela va beaucoup plus loin car on peut y déclaré des variables , des fonctions. 

class etudiant{
	public $prenom="Omar";
	public $age=37;
	public function pays()
	{
		return"FRANCE";
	}
}
// "public" permet de rendre les éléments (variables,functions) accessible partout.Il existe aussi protected et private

$objet=new etudiant();// avec le mot clé "new", on crée un objet dans une variable. la variable $objet est devenu un objet.
echo'<pre>';print_r($objet);echo'</pre>';
// On extrait des éléments de l'objet : 
echo $objet->prenom.'<br>'; 
// la flèche " -> " permet d'aller extraire un élément de mon objet
echo $objet->age.' ans'.'<br>';
// Nous pouvons piocher dans un ARRAY avec les crochets[].

//-- Nouvelle Exercice avant création du site --- -------------------
/*Enoncé : Créer une BDD boutique qui contient une table de produits
Champs de la table : id_produit,réference,catégorie,titre,description,couleur,taille,prix,stock

Créer un formulaire premettant des produits dans la base données
*/
echo '<hr>';
?>


