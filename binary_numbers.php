<?php

/*
Given a base-10 integer, n , convert it to binary (base-2). Then find and print the base-10 integer denoting the maximum number of consecutive 1's in n's binary representation.

Sample Case: 
The binary representation of 13 is 1101, so the maximum number of consecutive 1's is 2.
*/

$ones_counter = 0;
$total = 0;
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);


while( $n > 0 ) {
	$remainder = floor($n/2) ; 
	$result = $n % 2; 
	
	if ( $result > 0  ) {
		$ones_counter++;
		if ( $ones_counter >= $total )  {
			$total = $ones_counter ;
		}
	} 
	else { $ones_counter = 0 ;}
	$n = $remainder;
}
echo $total;





