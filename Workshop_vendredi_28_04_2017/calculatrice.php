<html>
<head>
<title>
FORMULAIRE CALCULATRICE
</title>
</head>
<body>
<pre>
<form action="" method=" POST">
ENTRER VOTRE 1<sup>ere</sup>NOMBRE :<input type="text" name="nbr1"   size="4">
ENTRER VOTRE 2<sup>eme</sup>NOMBRE :<input type="text" name="nbr2" size="4">
 
CHOIX D'OPERATION : <select name="operation" value=" operation">
<option value="+">+</option>
<option name="-"> -</option>
<option name="*">*</option>
<option name="/"> /</option>
<option name="%"> %</option>
</select>
 
 
<input type ="submit"  value="calculer"/>
</pre>
</form>
</body>
</html>
 
 
<?php
 
 
 if ( isset($_POST['nbr1']) &&  isset($_POST['nbr2']) &&  isset($_POST['operation'] ))
 {
 
   
    
    
   $n1=$_POST['nbr1'];
   $n2=$_POST['nbr2'];
   $opr= $_POST['operation'];
    
    
   switch($opr) {
 
   case'+': $resultat=$n1+$n2 ;
                echo " la resultat est : ".$resultat  ;
                break;
   case'-': $c=$n1-$n2 ;
                echo " la resultat est : ".$resultat ;
                break;
   case'*': $c=$n1*$n2 ;
                echo " la resultat est : ".$resultat ;
                break;
                 
   case'/': if($n2!=0){
                $c=$n1/$n2 ;
                echo " la resultat est :".$resultat ;
			}
                else echo"Erreur, Division impossible par zéro !";
                break;
                 
     
    
                else echo"Erreur, Division impossible par zéro !";
                break;
                 
                default :echo" SVP choisissez un operation a effectué";
    
   }
   
   else echo" une de vous variable est vide"; }
   else echo" une de vous variable n'existe pas";
?>



	
	
