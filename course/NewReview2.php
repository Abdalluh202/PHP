<HTML>
<BODY>
<form action="" method="POST">
<H3>What is your name<H3><input type="text" name="Name[]"></br>
<H3>How are old you<H3><input type="text" name="age[]"></br>
<H3>Where are you from<H3><input type="text" name="Cite[]"></br>
<input type="submit" name="run" value="submit"></br>
<?PHP
if(isset($_POST["run"])){
$Name=$_POST["Name"];
$age=$_POST["age"];
$Cite=$_POST["Cite"];

	echo "<table width='30%' height='30%' border='2'>";
	echo "<tr>"."<td>"."<ul>";
	foreach($Name as $I){
	echo "<li>"."Name:".$I."</br>"."</li>" ;
	}

	foreach($age as $A){
	echo "<li>"."Age:".$A."</br>"."</li>"  ;
	}

	foreach($Cite as $C){
	echo "<li>"."Cite:".$C."</br>"."</li>"  ;
	}
	echo "</ul>"."</td>"."</tr>";
	echo "</table>";

/*
$A=array("NAME"=>"$Name","age"=>"$age","Cite"=>"$Cite");
foreach($A as $I=>$R)
echo $I.": ".$R."</br>";
*/
/*
$A=array("NAME"=>$_POST["Name"]);
$B=array("age"=>$_POST["age"]);
$C=array"Cite"=>$_POST["Cite"]);
foreach($A as $I=>$R)
echo $I.": ".$R."</br>";
*/
}

?>
</BODY>
</HTML>

