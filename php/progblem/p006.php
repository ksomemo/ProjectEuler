<?php
$cnt = 100;
$sumPow2 = pow(array_sum(range(1, $cnt)), 2);
$pow2Sum = array_reduce(range(1, $cnt), function ($a, $b) {
	return $a + pow($b, 2);
}, 0);

echo $sumPow2 - $pow2Sum;
