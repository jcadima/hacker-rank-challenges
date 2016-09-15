<?php
/*
You are given an array of n integers,a_0, a_1, ... , a_n-1 , and a positive integer, k. 
Find and print the number of (i,j) pairs where i < j and a_i + a_j is evenly divisible by k

*/
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$k);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
$count = 0;
array_walk($a,'intval');
for ( $i = 0 ; $i <= $n ; $i++ )  {
	for ($j = $i + 1; $j < $n ; $j++ ) {
			if(  ($a[$i] + $a[$j]) % $k == 0 && $i < $j   ) {  $count++;   }		    
	 }
}
echo $count;


