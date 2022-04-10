<html>
<body>

<?php
echo "<table width='30%'height='30%' border='2'>";

for($A=1;$A<=8;$A++){
	echo "<tr>";
		if($A%2==1){
			for($B=1;$B<=8;$B++){
				if($B%2==0)
					echo "<td style='background-color:black'></td>";
				else
					echo "<td></td>";
			}
		}
		
		else{
			
			for($B=1;$B<=8;$B++){
			if($B%2==1)
				echo "<td style='background-color:black'></td>";
				
				else
						echo "<td></td>";
					
			}
			
			
			
			
		}
	
	
	echo "</tr>";
}


echo "<table>";

?>
</body>
</html>

