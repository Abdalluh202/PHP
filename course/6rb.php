<html>
<body>
<form action="#" method="POST">
 Add the hit nubmer<input type="text" name="hitt"></br>
 <input type="submit" name="run" value="submit"></br>
</form>
<table border="1" width="30%" height="1    0%">
	
<?php
if(isset($_POST["run"])){
$hit=$_POST["hitt"];
if(empty($hit))
	echo "NotDat";
else{
	if(is_numeric($hit)){
		//for($A=1 ; $A<=10 ;$A++){
			//echo "<th></th>";
		for($B=1 ; $B<=50 ;$B++){
			$D=$B*$hit;
			echo "<td>$D</td>";
		}
		//
	}
	
		
		
	
}	
}



?>
</table>
</body>
</html>