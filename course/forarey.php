
<html>
<body>
<?php
/*
// لترتيب الاعداد
$A=array(2,1,6,10,12);
foreach($A as $F)
echo $F."  ";
echo "</br>";
//بترتيب الاعداد تصاعدي
sort($A);
foreach($A as $F)
echo $F."  ";
echo "</br>";

//لترتيب الاعداد تنازلي
rsort($A);
foreach($A as $F)
echo $F."  ";
echo "</br>";
*/
/*
//
$A=array(2,4,6,10,12);
$X=implode("_",$A);// تحةل المصفوفه الى نص
echo "$X";
*/
$A=("السلام عليكم ورحمة الله" );
$X=explode(" ",$A);// تحول النص الى مصفوفه
print_r($X);
/*
$A=array(2,1,6,10,12);
$X=array_reverse($A);//تكتب خصائص المصفوفه معكوسه
//$X=array_unique($A); تكتب خصاص المصفوفه دون تكرار
foreach($X as $F)
echo $F."  ";
echo "</br>";
*/
/*
$A=array(2,1,2,10,12);
echo array_sum($A)."</br>";
echo "MAX=".max($A)."</br>";
echo "MIN=".MIN($A)."</br>";

*/


/*
$A=array(2,1,6,10,12);
$sum=0;
foreach($A as $F)
$sum+=$F;
echo $sum;
*/

/*
$A=array(2,4,6,10,12);
$sum=0;
for($B=0;$B<count($A);$B++){
	 $sum=$sum+$A[$B];
}
 echo $sum."</br>";
 */
?>
</body>
</html>
