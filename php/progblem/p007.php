<?php
use My\ProjectEuler\Math;

$primeCnt = 1;
$pos      = 10001;
$primes   = array(2);
for ($i = 3; $primeCnt < $pos; $i += 2) {
	if (Math::isPrime($i, $primes)) {
		$primeCnt++;
		$primes[] = $i;
	}

	echo $primeCnt . PHP_EOL;
}

echo $primes[$pos - 1];
