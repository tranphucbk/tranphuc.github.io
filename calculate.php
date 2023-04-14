<!DOCTYPE html>
<html lang="en">
<head>
	<title>May tinh tong</title>
	<meta charset="urf-8"/>
</head>
<body>
	<form method="post" action="sum.php">
		<h1>Tinh tong</h1>
		<label>Nhap so nguyen</label>
		<input type="text" name="number"/>
		<input type="submit" value="Calculate Sum"/>

	</form>

</body>
<?php
	session_start();
	$num=$_SESSION['num'];
	$sum=$_SESSION['sum'];
	$date=$_SESSION['date'];
	// echo "Previus result:<br>",$date,"<br>The result:",$sum;
	echo "Previus result:<br>",$date,"You enter",$num,"The result:",$sum;
?>


</html>