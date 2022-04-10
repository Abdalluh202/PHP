<html>
<body>

<?php
//-------لترتيب الاعداد-------------
//sort($A);//لترتيب الاعداد تصاعدي
//rsort($A);// لترتيب الاعداد تنازلي
//-----------method associativie-----------------
//asort($a);//ترتيب تنازلي
//arsort($a);// ترتب تصاعدي
//krsort($a);// ترتب تصاعدي ابجدي
//ksort($a);// ترتيب تنازلي ابجي
//---------------------------------
// العنصر الاخير في نهاية المصفوفه وتعيد قيمته array_popتزل الداله 
//array_pop($A);
//array_shift($A);// array_popعكس ال 
//unset($A[5]);//تزيل العدد الذي يكون رقمه بترتيب المصفوفه ب 5
//array_push($A,2,5,7,9,3);
//$R=array_reverse($A);//تكتب خصائص المصفوفه معكوسه
//$R=array_unique($A);//تكتب خصاص المصفوفه دون تكرار
//echo array_search(100,$A);
//echo  in_array(7,$A)."</br>";
//echo current($A)."</br>";//هل يوجد شي في المصفوفه
//echo next($A)."</br>";// ثاني رقم في المصفوفه
//echo prev($A)."</br>";
//---------------implode or explode------------------------
//$X=implode("/",$A);// تحويل المصفوفه الى نص
//$V=("السلام عليكم ورحمة الله وبركاتة");
//$F=explode(" ",$V);//تحول النص الى مصفوفه
//
/*
$grades=array(69,80,10,50,90,70,40,80,30,70,50);
$pass_grades=array();
foreach($grades as $pass){
	if($pass<=60){
	array_push($pass_grades,$pass);
	}
	
}
IF (count($pass_grades)==0){
ECHO "not here is pass";}
else
echo "MIN: ".max($pass_grades)."</BR>";
*/



/*-----------------------------------
$A=array(5,4,6,84,6,7,8,43,7,43);
//array_pop($A);
//array_shift($A);
//unset($A[1]);
//$A[]=9;
//array_push($A,2,5,7,9,3);
//foreach($A AS $B)
//echo $B." ";

//echo array_search(100,$A);
echo  in_array(7,$A)."</br>";
echo current($A)."</br>";//هل يوجد شي في المصفوفه
echo next($A)."</br>";// ثاني رقم في المصفوفه
echo prev($A)."</br>";
*/
//-----------------------------------------------------
/*
$x=array(

array(5,3,8,20),
array(6,2,9,50),
array(9,6,9,50)
);

for($A=0;$A<count($x);$A++){
	
	for($B=0;$B<count($x[$A]);$B++){
		echo $x[$A][$B]." ";
	}
	echo "</br>";
}

*/
/*
if(isset($_POST["run"])){
$name=$_POST["NAME"];
$age=$_POST["AGE"];
$cite=$_POST["Cite"];

<form action="" method="POST">
Enter Name<input type="text" name="NAME"></BR>
Enter AGE<input type="number" name="AGE"></BR>
Enter Cite<input type="text" name="Cite"></BR>
<input type="submit" name="run" value="submit"></BR>


//---------Q2------------------
$x=array("Name"=>"$name","age"=>"$age","Cite"=>"$cite");
echo "<table width='%30' height='%30' border='2'>";
echo "<tr>";
echo "<td>";
foreach($x as $I=>$value)
echo " <ul><li>".$I.": ".$value."</li> </ul>";
echo "</td>";
echo "</tr>";
echo "</table>";
//-------method associativie---------------
//asort($a);//ترتيب تنازلي
//arsort($a);// ترتب تصاعدي
//krsort($a);// ترتب تصاعدي ابجدي
//ksort($x);// ترتيب تنازلي ابجي
foreach($x AS $r =>$S)
ECHO $r.":".$S."</br>";
//-------------------------
}
*/

/*
$A=array(4,3,3,2,8,9);

// arrayطريقة طباعة ال 
//-----1---------
for($B=0;$B<count($A);$B++)
echo $A[$B]."  ";
echo "</br>"."-------------------------"."</br>";
//-----2--------
foreach($A as $i)
echo "  $i";
echo "</br>"."-------------------------"."</br>";
//-----3--------
print_r($A);
echo "</br>"."-------------------------"."</br>";
//-----------------------------------
print "COUNT: ".count($A)."</BR>";//arrayتحسب عدد ال 
print "MAX: ".max($A)."</BR>";
print "MIN: ".min($A)."</BR>";
echo "</br>"."-------------------------"."</br>";
// لترتيب الاعداد
//sort($A);//لترتيب الاعداد تصاعدي
rsort($A);// لترتيب الاعداد تنازلي
foreach($A as $i)
echo "  $i";
echo "</br>"."-------------------------"."</br>";
//---------------implode or explode------------------------
$X=implode("/",$A);// تحويل المصفوفه الى نص
echo $X;
echo "</br>"."-------------------------"."</br>";
$V=("السلام عليكم ورحمة الله وبركاتة");
$F=explode(" ",$V);//تحول النص الى مصفوفه
foreach($F as $I)
echo $I."</br>";
echo "</br>"."-------------------------"."</br>";

//$R=array_reverse($A);//تكتب خصائص المصفوفه معكوسه
$R=array_unique($A);//تكتب خصاص المصفوفه دون تكرار
foreach($R as $I)
echo $I."  ";
echo "</br>"."-------------------------"."</br>";
//------------------------------------------------

/*
<form action=""  method="POST">
 Enter Number 1<input type="text" name="num1"></br>
 Enter Number 2<input type="text" name="num2"></br>
<input type="submit" name="run" value="submit"></br>


if(isset($_POST["run"])){
$num1=$_POST["num1"];
$num2=$_POST["num2"];
	if(empty($num1)|| empty($num1)){
		echo "no data";

	}
	else{
		if(is_numeric($num1) && is_numeric($num2)){
			
			echo "<table border='2' height='10%' width='40%' >";
			echo "<tr>";
			for($A=$num1;$A<=$num2;$A++){
			if($A%$A==0)	
			echo "<td style=background-color:blue>".$A."</td>";
			else
				echo "<td>".$A."</td>";
			}
			echo "</tr>";
			echo "</table>";
		}
		else 
			echo "the num1 or num2 is not number";
}
//
}
*/
/*----------	if($A==$B)------------
echo "<table border='2' height='10%' width='40%' >";

for($B=0;$B<=10;$B++){
	echo "<tr>";
	for($A=0;$A<=10;$A++){
	if($A==$B){	
	echo "<td style=background-color:blue>".$A."</td>";
	break;
	
	}
	else
		echo "<td>".$A."</td>";
	
	}
	echo "</tr>";
}

echo "</table>";
*/





/*------if($A%2==0)------table
$sum=0;
echo "<table border='2' height='10%' width='40%' >";
echo "<tr>";
for($A=0;$A<=20;$A++){
if($A%2==0)	
echo "<td style=background-color:blue>".$A."</td>";
else
	echo "<td>".$A."</td>";
}
echo "</tr>";
echo "</table>";

*/

?>
</body>
</html>
