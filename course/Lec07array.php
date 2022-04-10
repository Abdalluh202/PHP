<html>
<body>
<?php
$A=array(1,2,3,4,5,6,7,8);
foreach($A as $i)
echo $i." ";
echo "<br>_____________</br>";
// العنصر الاخير في نهاية المصفوفه وتعيد قيمته array_popتزل الداله 
//array_pop($A);
//array_shift($A);// array_popعكس ال 
unset($A[5]);//تزيل العدد الذي يكون رقمه بترتيب المصفوفه ب 5
foreach($A as $i)
echo $i." ";
echo "<br>_____________</br>";

//$A[]=9;//تضيف رقم للمصفوفه
array_push($A,8,6,8);//اكثر من رقم في المصفوفه
foreach($A as $i)
echo $i." ";
echo "<br>_____________</br>";

$B=array();
foreach($A as $i)
{
	if($i%2==0)
		array_push($B,$i);
}
foreach($B as $i)
echo $i." ";
echo "<br>_____________</br>";


echo (array_search(7,$A)."</br>");//ما عرفته
echo in_array(8,$A)."</br>";//array كم عدد ال 8 في الاراي
if(in_array(8,$A))
	print("YES");
ELSE
	print("no");


echo "<br>_____________</br>";
//----------هذا السوال ------------------
$grades=array(60,80,10,50,90,70,40,80,30,70,50);
foreach($grades as $i)
echo $i." ";
echo "<br>_____________</br>";
$min_pass=100;
$coount=0;
foreach($grades as $i){
	if($i>=60){
		$coount++;
		if($i<=$min_pass)
			$min_pass=$i;
	}

}
if($coount!=0)
	echo "min_pass: ".$min_pass;
else 
	echo "NOT HERE IS STUDANT PASS";
//----------------------------------------
echo "<br>_____________</br>";
$Y=array();
echo current($A)."</br>";//هل يوجد شي في المصفوفه
echo next($A)."</br>";// ثاني رقم في المصفوفه
echo prev($A)."</br>";

//indexing
//associative array
?>
</body>
</html>