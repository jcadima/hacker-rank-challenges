<?php
/*
Roy wanted to increase his typing speed for programming contests. So, his friend advised him to 
type the sentence "The quick brown fox jumps over the lazy dog" repeatedly, because it is a pangram. (Pangrams are sentences constructed by using every letter of the alphabet at least once.)

After typing the sentence several times, Roy became bored with it. 
So he started to look for other pangrams.

Given a sentence (string) s, tell Roy if it is a pangram or not.
*/


$_fp = fopen("php://stdin", "r");
$string = fgets(STDIN);
$alphabet = array() ;
$string = strtolower(str_replace(" ", "", $string) ) ; // remove all white space
$string = preg_replace("/[^a-z ]/", '', $string);// remove everything that is not alphabet

for ($i = 0; $i < strlen($string)  ; $i ++) {
	$alphabet[] = $string[$i] ; // add characters to alphabet
}

$alphabet = array_unique($alphabet); // remove any duplicates
if( count($alphabet) == 26  ) { echo "pangram"; }
else { echo "not pangram";}