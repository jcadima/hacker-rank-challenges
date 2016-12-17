<?php
/*
Steve has a string, s , consisting of n lowercase English alphabetic letters. In one operation, he can delete any pair of adjacent letters with same value. For example, string "aabcc" would become either "aab" or "bcc" after 1 operation.

Steve wants to reduce s as much as possible. To do this, he will repeat the above operation as many times as it can be performed. Help Steve out by finding and printing 's non-reducible form!

Note: If the final string is empty, print Empty String .

INPUT: aaabccddd

OUTPUT: abd

*/



$input = fopen("php://stdin", "r");
$string = fgets($input);

for ( $n = 1; $n < strlen($string)  ; $n++ ) {
	if ( $string[$n] == $string[$n-1] ) {
		$string = substr($string,0, $n-1 ) . substr($string, $n+1 ) ;
		$n = 0; // reset the array counter
	}
}

if ( strlen($string) == 0 )
	echo "Empty String";
else 
	echo  $string ; 