<html><body>
	<form action="#" method="POST">
			Name:<input type="text" name="Name"><br></br>
			grade:<input type="text" name="gradee">
			<span><?php 
			$mas  = "grade musnt btween 0 and 100 </br>";
			$grade1=$_POST["gradee"];
				if($grade1 >100 || $grade1<0)
					echo "$mas";
			?></span>	<br></br>
			<input type="submit" name="run" value="submit"></br>
    </form>
<?php
if(isset($_POST["run"])){
	$Name=$_POST["Name"];
	$grade=$_POST["gradee"];
	if(empty($Name)||empty($grade))echo "No data";
	else{
	if (is_numeric($grade))
	{
		if($grade>=0 && $grade<=100)
		{
			echo "Name: ".$Name; echo "<br/>";
			echo "grade: ".$grade;echo "<br/>";
			if($grade>=60 && $grade<=100){
			echo "pass ";
			if($grade>=90)echo "A<br/>";
			else if($grade>=80)echo"B<br/>";
			else if($grade>=70)
				echo "C<br/>";
			else echo "D<br/>";
				
			}
			else {echo "Fail F<br/>";}			
		}
		else{ echo "$mas";}
	}
	else {echo "grade musnt be number";}	
}
}
?>
</html>
</body>