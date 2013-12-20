<?php
$primeCnt = 1;
$pos      = 10001;
$primes   = array(2);
for ($i = 3; $primeCnt < $pos; $i += 2) {
	if (isPrime($i, $primes)) {
		$primeCnt++;
		$primes[] = $i;
	}

	echo $primeCnt . PHP_EOL;
}

function isPrime($n, $primes) {
	foreach ($primes as $p) {
		if ($n % $p === 0) {
			return false;
		}
	}

	return true;
}

echo $primes[$pos - 1];
