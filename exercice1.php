<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="exercice1.php" method="POST">
	<input type="number" name="nbr" required=""><br>
	<input type="submit" name="btn">  

</form>
</body>
</html>



<?php 

$n = $_POST["nbr"];
for ($i=0; $i <= $n ; $i++) { 

	for ($j=1; $j <= $i ; $j++) { 
		echo $j;
	}
	echo "</br>";
}


 ?>