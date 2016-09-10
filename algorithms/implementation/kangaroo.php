<?php
/*
There are two kangaroos on an x-axis ready to jump in the positive direction (i.e, toward positive infinity). 
The first kangaroo starts at location x_1 and moves at a rate of v_1 meters per jump. 
The second kangaroo starts at location x_2 and moves at a rate of v_2 meters per jump. 
Given the starting locations and movement rates for each kangaroo, can you determine if they'll ever 
land at the same location at the same time?

> Print YES if they can land on the same location at the same time; otherwise, print NO
*/

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d %d",$x1,$v1,$x2,$v2);
$kang1 = $x1;  $kang2 = $x2;  $meet = false;
for ($i = 0 ; $i < 50; $i++ ) {
	$kang1 +=  $v1 ;
	$kang2 +=  $v2 ;
	if( $kang1 == $kang2) {
		$meet = true;
	}
}
echo ($meet) ? "YES" : "NO" ;

