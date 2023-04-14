<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP VArivable,Condition and Loop</title>
	<meta charset="urf-8"/>
</head>
<body>
<h1>Ket qua</h1>
<?php

	include("function.php");
	

	if(isset($_POST["number"])){
		$num=$_POST["number"];

		if(isPositiveInt($num)){
			$sum=calculateSum($num);
			echo "<p>Tong cac so tu nhien tu 1 den",$num,"la <strong>",$sum,"</strong>";
		}else{
			echo "Please enter an interger";
		}
	}else{
			echo "Something wrong,Please contact";
	}
	echo "<p><a href='calculate.php'>Quay lai trang truoc</a></p>"

?>
<?php
	session_start();
	$_SESSION['num']=$num;
	$_SESSION['sum']=$sum;
	$date=date('m/d/Y h:i:s a',time());
	$_SESSION['date']=$date;
?>


</body>
</html>