<?php
function calcul($fruit,$poids){// fonction à 2 arguments où on y déclare 2 variables
	switch($fruit){
		case'cerises':$prix_kg=5.76;break;
		case'bananes':$prix_kg=1.09;break;
		case'pommes':$prix_kg=1.61;break;
		case'peches':$prix_kg=3.23;break;
	default : return "fruit inexistant";break;
	}
	$resultat = round(($poids*$prix_kg/1000),2);// on veut le prix en grammes donc on divise par 1000 (1000 grammes = 1kg)
	return "les ".$fruit." coûtent ".$resultat." euros pour ".$poids." grammes ";
}
//echo calcul('cerises',1000);

