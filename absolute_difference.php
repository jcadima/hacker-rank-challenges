<?php
/*
The absolute difference between two integers, q and b , is written as |a-b|. The maximum absolute difference between two integers in a set of positive integers,elements , is the largest absolute difference between any two integers in elements.

The Difference class has a private integer array () for storing  non-negative integers, and a public integer () for storing the maximum absolute difference.

A computeDifference method that finds the maximum absolute difference between any  numbers in  and stores it in the  instance variable.
*/	

class Difference{
	private $elements = array();
	public $maximumDifference;
	
	function __construct(array $a) {
		$this->elements = $a ;
	}
	
	public function computeDifference() {
		$this->maximumDifference = max($this->elements) - min($this->elements) ;
	}
	
	
} //End of Difference class  
	     

$a = array_map('intval', explode(' ', fgets(STDIN)));
$d = new Difference($a);
$d->ComputeDifference();
print ($d->maximumDifference);

