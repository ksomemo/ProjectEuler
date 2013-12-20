<?php
/*
The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.

Find the sum of all the primes below two million.
*/
use My\ProjectEuler\Math;
ini_set('memory', '4000M');
$max     = 10;
//$max     = 2000000;
$nums    = range(3, $max, 2);
$primes  = array(2);
$i       = 0;
$divisor = array_shift($nums);
while (count($nums) > 0 && $divisor * $divisor <= $max) {
	echo $i++;
	$nums = array_filter($nums, function ($n) {
		global $divisor;

		return $n % $divisor !== 0;
	});

	$primes[] = $divisor;

	if (count($nums) > 0) {
		$divisor = array_shift($nums);
	}
}

$primes[] = $divisor;

	print_r($nums);
	print_r($primes);
	
echo (array_sum($primes) + array_sum($nums));
