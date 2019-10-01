<!DOCTYPE html>
<html>
<head>
	<title>pyramide</title>
</head>
<body>
<form action="exercice2.php" method="POST">
	<input type="number" name="valeur"><br>
	<input type="submit" name="btn" value="entrer">
	
</form>
</body>
</html>




<?php 
// $n = $_POST["valeur"];
// for ($i=0; $i <= $n; $i++) { 
// 	$et = str_repeat('* ', ($i-1)*1+1);
// 	$sp = str_repeat(' ', $n - $i );
	
// 	echo $sp . '  ' .$et . " <br />";
	
// echo "<pre>";
// }

$haut = $_POST["valeur"];
for ($i=0; $i <= $haut; $i++) { 
	$esp = str_repeat('&nbsp', ($haut - $i));
	
	echo $esp;
	for ($j= 0; $j < $i ; $j++) { 

		echo " * ";
	}
	echo "</br>";
}

 ?>