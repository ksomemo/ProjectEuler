<?php
$divMax = 10;
$num    = $divMax;
while (true) {
	$isMod0All = true;
	for ($i = 2; $i <= $divMax; $i++) {
		if ($num % $i !== 0) {
			$isMod0All = false;
		}
	}

	if ($isMod0All) {
		break;
	}

	$num++;
}

echo $num . PHP_EOL;
