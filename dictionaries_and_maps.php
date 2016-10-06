<?php
/*
Given "n" names and phone numbers, assemble a phone book that maps friends' names to their respective phone numbers. 
You will then be given an unknown number of names to query your phone book for. For each "name" queried, 
print the associated entry from your phone book on a new line in the form name=phoneNumber; 
if an entry for "name" is not found, print Not found instead.

Sample Input:
3
sam 99912222
tom 11122222
harry 12299933
sam
edward
harry

Sample Output:
sam=99912222
Not found
harry=12299933
*/


$phonebook = array();
$limit = intval(fgets(STDIN));

for($i = 0 ; $i < $limit  ; $i++ )  {
	$new_entry = str_replace("\n", '', fgets(STDIN) )  ;
	$arr = explode(" ", $new_entry); 
	$phonebook[$arr[0]] = $arr[1] ;
}

while($searchname = fgets(STDIN) ){
    $searchname = str_replace("\n", '',$searchname )  ;
	if ( array_key_exists(  $searchname , $phonebook)  ) {
		echo $searchname . '=' .$phonebook[$searchname] . "\n" ;
	}
	else {
		echo "Not found\n" ;
	}     
}