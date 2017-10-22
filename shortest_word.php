<?php
/*
given a string of words, return the length of the shortest word(s).
String will never be empty and you do not need to account for different data types.

Examples:
findShort("i want to travel the world writing code one day") should return 1
findShort("Lets all go on holiday somewhere very cold")  should return 2
findShort("bitcoin take over the world maybe who knows perhaps") should return 3
*/

function findShort($str){
	// explode string at spaces
	// filter array with string length
	// return the minimum of the filtered array
	return min(array_map('strlen', (explode(' ', $str))));
}