
<?php
if(isset($_POST["run"])){
	$Name=$_POST["NAME"];
	$ID=$_POST["ID"];
	$Age=$_POST["AGE"];
	$ADDN="";
	$acce="";
	
	if(empty($Name) || empty($ID) || empty($Age)){
		echo "NotDat";
	}
	else {
		if(is_numeric($ID) && is_numeric($Age)){
			if($Age>=18)
				$acce="acceptable";
			else
				$ADDN="NotAcceptable";
		}
		else{
			echo "AddNumberPlaess";
		}
			
		}
		echo "$Name";
		echo "$ID";
		echo "$Age";
}
?>
<html>
<body><form>
Add Name : <input type="text" name="NAME"></br>
ADD iD :   <input type="text" name="ID"></br>
ADD Age :  <input type="text" name="AGE"></br>
<input type="submit" name="run" value="submit"></br>
<?php 
echo "$acce";
echo "$ADDN";
?>
</form>
</body>
</html>