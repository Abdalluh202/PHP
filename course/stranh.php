<html>
<body style="background-color:Lightblue">
<table border="1" width="70%" height="70%" >

<?php
for($A=1;$A<=10;$A++){
			echo "<tr></tr>";
	for($B=1;$B<=10;$B++){
		if($B%2==0){
		echo "<td style='background-color:black'></td>";
		}
		else
			if($B%2==1){
		echo "<td style='background-color:blue'></td>";
		}
		else
			echo "<td></td>";
			
	}
}



?>
</table>
</body>
</html>