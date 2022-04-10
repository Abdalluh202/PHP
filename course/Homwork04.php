<html>
<body>
<?php

$grades=array(60,80,10,50,90,70,40,80,30,70,50);
$gradespass=array();
$gradespass1=array();
$ss=0;
//---------method1----------------
foreach($grades as $F)
echo " ".$F;
echo "</br>";
//---------method2----------------
for($B=0;$B<count($grades);$B++)
	echo $grades[$B]."  ";
echo "</br>";
//---------method3-------------------
print_r($grades);
echo "</br>";

//----------Q2-----------------------

	for($A=0;$A<count($grades);$A++){
		if($grades[$A]>=60){
	$gradespass[$ss++]=$grades[$A];
							}
ELSE ECHO "not here the student is pass</br>";	
									}
			echo "MIN=".MIN($gradespass)."</br>";

//--------Q3----------------------------


	for($A=0;$A<count($grades);$A++){
		if($grades[$A]<60){
	$gradespass1[$ss++]=$grades[$A];
							}
		ELSE ECHO "not here the student is pass</br>";					
									}
			echo "MAX= ".max($gradespass1)."</br>";
//-------Q4--------------------------------
$Avrege=array_sum($grades)/count($grades);
echo "Avrege=$Avrege</br>";

//-------Q5--------------------------------
$Avregepass=0;
$count=0;
foreach($grades as $F){
if ($F>=60){
	$Avregepass=$Avregepass+$F;
	$count++;
}
else 
	echo "not here sutdent is pass</br>";
}
echo "Avregepass: ".$Avregepass/$count."</br>";
//---------Q6------------------
sort($grades );
foreach($grades as $F)
echo $F."  ";
echo "</br>";
//-----------Q7-----------
$X=array_unique($grades);
foreach($X as $F)
echo $F."  ";



?>
<body>
<html>
