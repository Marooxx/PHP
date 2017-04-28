<?php

for ($i = 1; $i < 101; $i++)
	{
	if ($i ==50)
	{
		echo "<span>" . $i . "</span><br>";
	}
	else{
		echo $i;
		echo "<br />";
	}
}

?>
<style>
span:hover{
	color:red;
	font-size:300%;
}
</style>