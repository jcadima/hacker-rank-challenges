<?php

/*

Consider an array of n integers, A = [ a_0, a_1, . . . , a_n-1 ], where all but one of the integers occur in pairs. 
In other words, every element in A occurs exactly twice except for one unique element.

Given A , find and print the unique element.


Constraints:
1 <= n <= 100
it is guaranteed that n is an odd number
0 <= a_i <= 100,  where 0 <= i < n

Input Format

The first line contains a single integer, n , denoting the number of integers in the array. 
The second line contains n space-separated integers describing the respective values in A.


Output Format

Print the unique number that occurs only once in  A  on a new line.


Input
5
0 0 1 2 1

Output:
2


Explanation
We have two 0's, two  1's, and one 2. We print 2, because that's the only unique element in the array.

*/


function lonelyinteger( $a) {

    $lonely = array_count_values($a) ;
    return  array_search(min($lonely), $lonely) ;

}

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d", $_a_cnt);
$_a = fgets($__fp);
$_a = explode(' ',$_a);
$res = lonelyinteger($_a);
echo $res;


