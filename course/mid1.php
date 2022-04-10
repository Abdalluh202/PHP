<html>
<body>
<form action="#" method="POST">
Name : <input type="text" Name="Name"></br>
age  : <input type="text" Name="age"></br>
grade :<input type="text" Name="grade"></br>
<input type="submit" name="run" value="submit"></br>
</form>
<?php
if(isset($_POST["run"])){
$name=$_POST["Name"];
$age=$_POST["age"];
$grade=$_POST["grade"];
	if(empty($name) || empty($grade) || empty($age)){
		echo "NoDat";
		}
	else{
		if(is_numeric($grade) || is_numeric($age)){
			if($age>=18 && $age<=30){
				if($grade>=0 && $grade<=100){
					echo "<table border=2 width='30%'><tr><td>";
					echo "<ul>";
					echo "<li>Name: $name </li>";
					echo "<li>Age: $age </li>";
					echo "<li>grade: $grade </li>";
					echo "</ul>";
					if($grade>=60)
						echo "$name is pass";
					else
						echo "$name is fail";
					echo "</td></tr></table>";
				}
				else
					echo "Enater grade between 1 or 100	";	
			}
			else
				echo "Enater Age between 18 or 30";
		}
		else
			echo "ADD Number pless";
	}
}
?>
</body>
</html>