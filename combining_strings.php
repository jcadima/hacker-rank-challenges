<?php
/*
Given a string, S , of length N that is indexed from 0 to N-1 , 
print its even-indexed and odd-indexed characters as 2 space-separated strings on a single line. 
Input Format:
The first line contains an integer,   (the number of test cases). 
Each line  of the  subsequent lines contain a String.


INPUT:
2
Blue
Fox

OUTPUT:
Bu le
Fx o

*/

$num_words = intval(fgets(STDIN));
for ( $m = 0; $m < $num_words; $m++ )  { 
	$mystring = "";
	$mystring_even = ""; 
	$mystring_odd = "";
	$mystring = str_replace("\n", '', fgets(STDIN) )  ; // clear new line

	for ($k = 0; $k < strlen($mystring)   ; $k++ ) {
		// bitwise AND, the least significant bit of an odd number is always 1 
		if ( $k & 1 ) 
			$mystring_odd .=  $mystring[$k];
		else 
			$mystring_even .= $mystring[$k];
	}
	print "$mystring_even" . " $mystring_odd";
	print "\n";
}

