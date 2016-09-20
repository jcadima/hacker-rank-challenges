<?php
/*
Alice has a binary string, B , of length n . She thinks a binary string is beautiful if and only if it doesn't contain the substring  "010"

In one step, Alice can change a 0 to a 1 (or vice-versa). Count and print the minimum number of steps needed to make Alice see the string as beautiful.
*/



$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
fscanf($handle,"%s",$B);

echo substr_count($B, '010');