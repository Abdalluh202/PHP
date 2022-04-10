
<html>
<body>
<form action="#" method="POST">
Number X : <input type="text" name="A"></br>
Number Y : <input type="text" name="B"></br>
<input type="submit" name="run" value="submit"></br>
</form>
<?php
if(isset($_POST["run"])){
$X=$_POST["A"];
$Y=$_POST["B"];


if(empty($X) || empty($Y)){
	echo "NO date";
}
else{
	
	if(is_numeric($Y)|| is_numeric( $X)){
	
		FOR($A=$X;$A<=$Y;$A++){
			if($A%2==0)
			echo "<h5 style='color:red'>$A</h5>";
			}
}
		else
			echo "Not Nuber";
			
}

	}
?>
</body>
</html>
