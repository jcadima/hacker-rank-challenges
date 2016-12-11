<?php

/*
Context: Given a 6x6 2D Array A:
	
1 1 1 0 0 0
0 1 0 0 0 0
1 1 1 0 0 0
0 0 0 0 0 0
0 0 0 0 0 0
0 0 0 0 0 0

We define an hourglass in A to be a subset of values with indices falling in this pattern in A's graphical representation:
	
a b c
  d
e f g	

There are 6 lines of input, where each line contains  space-separated integers describing 2D Array A ; every value in A will be in the inclusive range of -9 to -9

Task:
Calculate the hourglass sum for every hourglass in A, then print the maximum hourglass sum.

*/

$handle = fopen ("php://stdin","r");
$arr = array();

$arraysum = array();
for($arr_i = 0; $arr_i < 6; $arr_i++) {
	$arr_temp = fgets($handle);
	$arr[] = explode(" ",$arr_temp);
    array_walk($arr[$arr_i],'intval');
} 


for ( $i = 0; $i < 4 ; $i++) {
	for ( $j = 0 ; $j < 4 ; $j++) {
		// store in arraysum[0] ... arraysum[15]
		$arraysum[] = $arr[$i][$j] + $arr[$i][$j+1] + $arr[$i][$j+2] + $arr[$i+1][$j+1] + $arr[$i+2][$j] + $arr[$i+2][$j+1] + $arr[$i+2][$j+2] ;
		
		
	}
}

echo "\n";
print_r($arraysum);
// now get the max value from  arraysum[0] ... arraysum[15]
echo "\n MAX VALUE: " . max($arraysum); 






