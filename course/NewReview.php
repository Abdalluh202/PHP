<html>
<body>

<form action="" method="POST">
<H3>Name:</H3><input type="text" name="NAMe"></BR>
<H3>ID:</H3><input type="text" name="Id"></BR>
<h3>where are you from</h3>
<input type="checkbox" name="A[]" value="Saudi Arabia"><b>Saudi Arabia</b>
<input type="checkbox" name="A[]"value="USP"><b>USP</b>
<input type="checkbox" name="A[]" value="Japan"><b>Japan</b></BR>

<h3>what color do you like</h3>
<input type="checkbox" name="R" value="Reed"><b>Reed</b>
<input type="checkbox" name="g"value="green"><b>green</b>
<input type="checkbox" name="B" value="blue"><b>blue</b></BR>
</br><input type="submit" name="run" value="submit"></BR>
<?php 
if(isset($_POST["run"])){
$Name=$_POST["NAMe"];
$ID=$_POST["Id"];
	IF (is_numeric($ID)){
		
	IF(isset($_POST["R"])){
		IF(isset($_POST["A"])){
			echo "<table width='%30' height='%30'  border='2'>";
			echo "<td style='background-color:red'>"."<ul>";
			echo "<li>"."$Name"."</li>";
			echo "<li>"."$ID"."</li>";
			foreach($_POST["A"] AS $B)
			echo "<li>"."$B"."</li>";
			echo "<ul>"."</td>";
			echo "</table>";
		}
		else
			echo "NOT HERE I LIKE";
	}
	
		else IF(isset($_POST["g"])){
		IF(isset($_POST["A"])){
			echo "<table width='%30' height='%30'  border='2'>";
			echo "<td style='background-color:green'>"."<ul>";
			echo "<li>"."$Name"."</li>";
			echo "<li>"."$ID"."</li>";
			foreach($_POST["A"] AS $B)
			echo "<li>"."$B"."</li>";
			echo "<ul>"."</td>";
			echo "</table>";
		}
		else
			echo "NOT HERE I LIKE";
		
		
		
	}
	
			else IF(isset($_POST["B"])){
		IF(isset($_POST["A"])){
			echo "<table width='%30' height='%30'  border='2'>";
			echo "<td style='background-color:blue'>"."<ul>";
			echo "<li>"."$Name"."</li>";
			echo "<li>"."$ID"."</li>";
			foreach($_POST["A"] AS $B)
			echo "<li>"."$B"."</li>";
			echo "<ul>"."</td>";
			echo "</table>";
		}
		else
			echo "NOT HERE I LIKE";
		
		
		
	}
	
	
	
	}
	ELSE 
		ECHO "the id is not number";
}
/*
<h3>Which country do you Like</BR></h3>
<form action="" method="POST">
<input type="Checkbox" name="" value="saudi Arabia">Saudi Arabia
<input type="checkbox" name="" value="USP">USP
<input type="checkbox" name="" value="Japan">Japan
*/
?>

</body>
</html>
