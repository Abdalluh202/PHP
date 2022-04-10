<html>
<body>
    <form action="#" method="POST">
        Name:<input type="text" name="Name"><br></br>
        graed:<input type="number" name="graed">
        <br></br>
        <input type="submit" name="run" value="submit"></br>
    </form>
    <?php
    if(isset($_POST["run"])){	$g=$_POST["graed"]; $N=$_POST["Name"];
        if(!$g || !$N )
            echo "NO Data";
        else {
        if(   $g<0 || $g>100 )
            echo "   Error   ";
        else IF($g>=90) 
            echo "   A ";
        else if ($g>=80)
            echo "  B  ";
        else if ($g>=70)
            echo "   C   ";
        else if ($g>=60)
            echo "   D   ";
        else 
            echo "   F    ";
        if($g>100 || $g<0)
            echo "";
        else if ($g>=60)
            echo " ناجح ";
        else 
            echo " راسب ";
        }  
    }
    ?>