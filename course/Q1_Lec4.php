<html>
<body>
    <form action="#" method="POST">
        X:<input type="text" name="X"><br></br>
        Y:<input type="text" name="Y">
        <br></br>
        <input type="submit" name="run" value="submit"></br>
    </form>
<?php
if(isset($_POST["run"])){
	
$X=$_POST["X"];
$Y=$_POST["Y"];
	
	if(is_numeric($X) || is_numeric($Y)){
		
		
		if($X<=$Y){
			$sum=0;
			while($X<=$Y){
				
				$sum+=$X;
				$X++;
			}
			echo "$sum";
				
			
		}
		else 
			echo "X>Y";
		
		
		
		
		
		
		
		
	}
	else 
		echo "NOT number";
	
	
	
	
	
	
	
	
	
}
else
	echo "NOT data";



?>
<html/>
<body/>