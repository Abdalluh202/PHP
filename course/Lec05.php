<html>
<body>
<table border="1" width="50%" height="50%">

<?php

for($A=1;$A<=10;$A++){
	
	echo "<tr>";
	for($B=1;$B<=10;$B++){
		if ($B%2==1){
	echo "<td style='background-color:red'></td>";
		}
	else
		echo "<td></td>";
	}
	echo"</tr>";
	
	
}


?>
</table>
</body>
</html>
