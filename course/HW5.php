<html>
<body>

<form action="" method="POST">

<h3>What's your name</h3>

<input type="text" name="namertext"></br>

<h3>Phone number</h3>
<input type="number" name="number"></br>


<h3>birthday</h3>
<input type="date" name="date"></br>

<h3>email</h3>
<input type="email" name="email"></br>

<h3>password</h3>
<input type="password" name="password"></br>

<H3>gender</H3>
<input type="radio" name="gender" value="male">male</br>
<input type="radio" name="gender" value="female">female</br>

<h3>where are you from</h3>
<input type="checkbox" name="city" value="KSA">KSA</br>
<input type="checkbox" name="city" value="USA">USA</br>


<h3>What is your favorite color</h3>
<input type="color" name="color"></br>

 <input type="range" name="range"></br>
 
<input type="reset" name="res" value="reset"></br>
<input type="submit" name="run" value="submit"></br>
<?php
if(isset($_POST['run']))
{
	echo "<hr></hr>";
	echo "<ul>";
	$name=$_POST['namertext'];
	echo "<li>Name is : ".$name."</li></br>";

	$number=$_POST['number'];
	echo "<li>Phone number : ".$number."</li></br>";
	
	
	$birthday=$_POST['date'];
	echo "<li>birthday : ".$birthday."</li></br>";
	
	$email=$_POST['email'];
	echo "<li>email : ".$email."</li></br>";
	
	
	$password=$_POST['password'];
	echo "<li>password : ".$password."</li></br>";
	
	if(isset($_POST['gender'])){
		$gender=$_POST['gender'];
		echo "<li>gender : ".$gender."</li></br>";
		
	}
	
	
	if(isset($_POST['city'])){
		$city=$_POST['city'];
		echo "<li>city : ".$city."</li></br>";
		
	}
	
		$color=$_POST['color'];
	echo "<li>color : ".$color."</li></br>";
	
	$range=$_POST['range'];
	echo "<li>range : ".$range."</li></br>";
		echo "</ul>";
}
?>

<body>
<html>
