<?php

// add code to calculate 100!
$str = "93326215443944152681699238856266700490715968264381621468592963895217599993229915608941463976156518286253697920827223758251185210916864000000000000000000000000";
$arr = str_split($str);

$sum=0;
foreach($arr as $element){
	$sum += $element;
}

echo $sum;