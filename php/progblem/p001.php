<?php
echo array_sum(
	array_filter(range(1, 1000 - 1), function ($v) {
		return $v % 3 === 0 || $v % 5 === 0;
	})
);
