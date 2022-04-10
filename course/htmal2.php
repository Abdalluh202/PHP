<html>
<body>
	<form action="#" method="POST">
Name:<input type="text" name="A">
	<br></br>

<input type="submit" name="run" value="submit"></br>

	</form>




<?php
if(isset($_POST["run"]))
	
{
	$a=$_POST["A"];
	
	if($a)
		echo "your name : ".$_POST["A"];
	else 
		echo "NO Data";
	
	/*
	if(!$a)
			echo "NO Data";
	else 
	
	echo "your name : ".$_POST["A"];
	
	*/
	
	/*
	if(empty($a))
		echo "NO Data";
	else 
		
	echo "your name : ".$_POST["A"];
	*/
	//empty فكشن هاذي
	
}


?>