<?php
$maxNum = 4000000;
$start  = 2;
$sum    = 0;
$num    = $start;

$fibs = array(
	0 => 0,
	1 => 1,
);

while (true) {
	$fib = fibMemo($num);
	if ($maxNum < $fib) {
		break;
	}

	if ($fib % 2 === 0) {
		$sum += $fib;
	}

	$num++;
}

function fibMemo($n) {
	global $fibs;

	if (isset($fibs[$n])) {
		return $fibs[$n];
	}

	return $fibs[$n] = fibMemo($n - 2) + fibMemo($n - 1);
}

echo $sum;
