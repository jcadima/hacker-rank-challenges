<?php
/*
Write a factorial function that takes a positive integer, N as a parameter and prints the result of N!(N factorial). 

input format: A single integer,  (the argument to pass to factorial).
*/	
function factorial($n) {
	if ( $n > 1 ) {
		return $n * factorial($n - 1 )  ;
	}
	else {
		return 1;
	}
}


$number = intval(fgets(STDIN));
echo factorial($number) ;

/*   example output:
case n=3

return 3 * factorial(2)

	factorial(2):
		return 2 * factorial(1) = return 2 * 1

 
case n=5
 
return 5 * factorial(4)
  factorial(4):
    return 4 * factorial(3)
	  factorial(3):
		return 3 * factorial(2)
		  factorial(2):
			return 2 * factorial(1) = 2 * 1
 

*/
