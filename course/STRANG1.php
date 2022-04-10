<html>
<body>
<form action="#" method="POST">
EnterNumber1 <input type="text" name="NUMBER1"></br>
EnterNumber2 <input type="text" name="NUMBER2"></br>
<input type="submit" name="hit" name="hit">
</form>
<table border="1" height="10%" width="30%">
<?php
if(isset($_POST["hit"])){
$n1=$_POST["NUMBER1"];
$n2=$_POST["NUMBER2"];	
	if(empty($n1) && empty($n2)){
		echo "NotDat";
	}
	else{
		if(is_numeric($n1) && is_numeric($n2)){
			if($n1>$n2){
				for($A=1;$A<=10;$A++){
					$S=$n1*$A;
					echo "<td>$S</td>";
				}
			}
			else if($n2>$n1){
				for($B=1;$B<=10;$B++){
					$Q=$n2*$B;
					echo "<td>$Q</td>";
			}
			}
		}
		else{
			echo "Add number plaess";
		}
	}
	
}

?>
</table>