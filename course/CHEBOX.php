<html>
<body>
<h3>Which country do you Like</BR></h3>
<form action="#" method="POST">
<input type="Checkbox" name="x[]" value="saudi Arabia"/>saudi Arabia</br>
<input type="Checkbox" name="x[]" value="USP"/>USP</br>
<input type="Checkbox" name="x[]" value="freance"/>freance</br>
<input type="Checkbox" name="x[]" value="Spain"/>Spain</br>
<input type="Checkbox" name="x[]" value="Japan"/>Japan</br>
<input type="submit" name="run" value="submit"/></br>
<?php
if(isset($_POST["run"]))
{
	if(isset($_POST["x"])){
		echo "<ul>";
		sort($_POST["x"]);
		foreach($_POST["x"] as $chebox)
		echo "<li> ".$chebox."</li> ";
		echo "</ul>";
	}
	else
		echo "doesnt,t "; 
	
	
	
}

?>
</body>
</html>