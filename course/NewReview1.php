<html>
<body>
<form action="" method="POST">
<h3>Enter namber1</h3><input type="text" name="Namber1"></br>
<h3>Enter namber2</h3><input type="text" name="Namber2"></br>
<h3>What color do you like</h3>
<input type="Checkbox" name="R" value="Red">Red
<input type="Checkbox" name="G" value="green">green
<input type="Checkbox" name="B" value="Blue">Blue</br>
<input type="submit" name="run" value="submit"></br>
<?php
if(isset($_POST["run"])){
$namber1=$_POST["Namber1"];
$namber2=$_POST["Namber2"];	
$A=array();

if(is_numeric($namber1) && is_numeric($namber2)){
		for($T=$namber1;$T<=$namber2;$T++){
		array_push($A ,$T);
		}
		$singel=array();
		$nos=array();
		foreach($A as $B){
		IF($B%2==0)
			array_push($nos ,$B);
		else 
			array_push($singel ,$B);
		}
}
if(isset($_POST["R"])){
foreach($singel AS $I)
echo "<b style='color:red'>"." ".$I." "."</b>";
echo "</br>"."__________________________"."</br>";
foreach($nos AS $I)
echo "<b style='color:red'>"." ".$I." "."</b>";
}
else if (isset($_POST["G"])){
	foreach($singel AS $I)
echo "<b style='color:green'>"." ".$I." "."</b>";
echo "</br>"."__________________________"."</br>";
foreach($nos AS $I)
echo "<b style='color:green'>"." ".$I." "."</b>";	
}
ELSE{

	foreach($singel AS $I)
echo "<b style='color:Blue'>"." ".$I." "."</b>";
echo "</br>"."__________________________"."</br>";
foreach($nos AS $I)
echo "<b style='color:Blue'>"." ".$I." "."</b>";	
	
}



}

?>
</body>
</html>
