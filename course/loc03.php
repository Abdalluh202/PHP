<html>
<body>
  <form action="#" method="POST">
        Name:<input type="text" name="Name"><br></br>
        grade:<input type="texr" name="grade">
        <br></br>
        <input type="submit" name="run" value="submit"></br>
    </form>
	<?php
	// submitعشان تشتغل ال 
	if(isset ($_POST(["run"]))
	$gradee=($_POST(["grade"]));
	$name=$_POST["Name"];
	if(empty($name)||empty($gradee))
		echo "Not empty";
	else{
		if(is_numeric($gradee)){
			if ($gradee>=60) && ($gradee<=100)
				echo "$name</br>";
				echo "$gradee</br>";
				
				if ($gradee>=60) && ($gradee<=100){
					echo "pass</br>";
					if($gradee>=90)
						echo "A</br>"
					else if($gradee>=80)
						echo "B</br>"
					if($gradee>=70)
						echo "A</br>"
					
					
				}
				else 
					echo "F</br>";
					
			else {
					echo "grade musnt btween 0 and 100 </br>";
			}
			
		}
		else 
			echo "grade musnt be number</br>";
		
		
		
		
		
		
	}
	


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	?>
</body>

</html>



