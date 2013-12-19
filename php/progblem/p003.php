<?php
// PHP_INT_MAX: 2147483647を超えている
$num    = 600851475143;
$primes = array();

function primeCnt($n) {
	global $num, $primes;

	$primeCnt = 0;
	while (fmod($num, $n) === 0.0) {
		$num = $num / $n;
		$primeCnt++;
	}

	if ($primeCnt > 0) {
		$primes[] = array(
			'prime' => $n,
			'cnt'   => $primeCnt,
		);
	}
}

primeCnt(2);
for ($i = 3; $i <= $num; $i = $i + 2) {
	primeCnt($i);
}

print_r($primes);
$maxPrime = array_reduce($primes, function ($a, $b) {
	return max($a['prime'], $b['prime']);
}, 0);

echo $maxPrime . PHP_EOL;
