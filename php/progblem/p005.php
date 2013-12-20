<?php
$divMax = 20;

// 2-20までの因数を求める
$factors = array();
for ($i = 2; $i <= $divMax; $i++) {
	$tmp = $i;
	for ($divisor = 2; $divisor <= $tmp; $divisor++) {
		while ($tmp % $divisor === 0) {
			if (isset($factors[$i][$divisor])){
				$factors[$i][$divisor]++;
			} else {
				$factors[$i][$divisor] = 1;
			}

			$tmp = $tmp / $divisor;
		}
	}
}

// 各因数の中で一番多い数を求めてそれを掛ければよい
$f = array();
foreach ($factors as $v) {
	foreach ($v as $factor => $cnt) {
		if (!isset($f[$factor])){
			$f[$factor] = $cnt;
		} elseif ($f[$factor] < $cnt) {
			$f[$factor] = $cnt;
		}
	}
}
$answer = 1;
foreach ($f as $factor => $cnt) {
	$answer = $answer * pow($factor, $cnt);
}

print_r($factors);
echo $answer . PHP_EOL;
