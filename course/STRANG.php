<html>
<body>
<table border="1" height="30%" width="50%">


<?php
for($A=1; $A<=8 ; $A++){
	echo "<tr>";
	for($B=1;$B<=8;$B++){
		if($A%2==0){
			if($B%2==0){
				echo "<td style='background-color:black'></td>";
				continue;
			}
			echo "<td></td>";
		}
		
		if($A%2==1){
			if($B%2==1){
				echo "<td style='background-color:black'></td>";
				continue;
			}
			echo "<td></td>";
		}
		
		
	}
	echo "</tr>";
}
?>


</table>
</body>
<html>
