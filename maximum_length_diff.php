<?php
/*
You are given two arrays a1 and a2 of strings. Each string is composed with letters from a to z. Let x be any string in the first array and y be any string in the second array.

Find max(abs(length(x) − length(y)))

*/


function mxdiflg($a1, $a2) {
	$max = 0;
	if( empty($a1) || empty($a2) ) {
	  return -1;
	}

	// Compare each value from array1 with array2
	  for ($i = 0; $i < count($a1)   ; $i++ ) {
	  	for($j = 0 ; $j < count($a2)  ; $j++  ) {
	  		$current =  abs(strlen($a1[$i]) - strlen($a2[$j])  ) ;
	  
	  		if( $current > $max ) {	
	  			$max = abs(strlen($a1[$i]) - strlen($a2[$j])  ); 
	  			
	  		}		
	  	}
	  }
	  return $max;
}

// EXAMPLE
$s1 = ["hoqq", "bbllkw", "oox", "ejjuyyy", "plmiis", "xxxzgpsssa", "xxwwkktt", "znnnnfqknaz", "qqquuhii", "dvvvwz"];
$s2 = ["cccooommaaqqoxii", "gggqaffhhh", "tttoowwwmmww"];

echo  mxdiflg($s1, $s2); // 13







