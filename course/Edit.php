

<?PHP
if(isset($_POST["getNaem"])){
$Name=$_POST["getNaem"];

	$Name=$Name;
}


?>
<html>
<body>
<form>
Name: <input type="text" name="Name">
<input type="submit" name="getNaem" value="submit">
</form>

</body>
<html>
<?php
echo "$Name";
?>