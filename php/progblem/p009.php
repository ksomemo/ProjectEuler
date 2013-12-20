<?php

$sum = 1000;
for ($a = 1; $a <= $sum; $a++) {
	for ($b = 1; $b <= $sum - $a; $b++) {
		for ($c = 1; $c <= $sum - $a - $b; $c++) {
			if ($a + $b + $c == $sum) {
				if ($a * $a + $b * $b === $c * $c) {
					echo sprintf('($a, $b, $c) = (%3d, %3d, %3d)', $a, $b, $c) .PHP_EOL;
					echo '$a * $b * $c = '. ($a * $b * $c) .PHP_EOL;
					exit;
				}
			}
		}
	}
}
