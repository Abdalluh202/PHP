<html>
<body>
<form action="#" method="POST">
<table border="1" width='30%'>
<?php
if(isset($_POST["run"])){
$name=$_POST["Name"];
$age=$_POST["age"];
$grade=$_POST["grade"];
$ADD_number="";
$EnterAGE="";
$EnterGRA="";
$not="";
	if(empty($name) || empty($grade) || empty($age)){
		$not="NoDat";
		}
	else{
		if(is_numeric($grade) && is_numeric($age)){
			if($age>=18 && $age<=30){
				if($grade>=0 && $grade<=100){
					echo "<td>";
					echo "<ul>";
					echo "<li>Name: $name </li>";
					echo "<li>Age: $age </li>";
					echo "<li>grade: $grade </li>";
					echo "</ul>";
					
					if($grade>=60)
						echo "$name is pass";
					else
						echo "$name is fail";
					echo "</td>";
				}
				else
					$EnterGRA="Enater grade between 1 or 100";	
			}
			else
				 $EnterAGE="Enater Age between 18 or 30";
		}
		else
			$ADD_number="ADD Number pless";
	}
}
?>

Name : <input type="text" Name="Name"></br>
age  : <input type="text" Name="age"><?php if(isset($_POST["run"])){ echo "$not"; echo "$ADD_number"; echo "$EnterGRA"; echo "$EnterAGE";}?></br>
grade :<input type="text" Name="grade"></br>
<input type="submit" name="run" value="submit"></br>
</form>
</table>
</body>
</html>
 