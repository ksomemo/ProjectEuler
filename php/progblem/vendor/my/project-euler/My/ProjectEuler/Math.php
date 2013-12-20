<?php

namespace My\ProjectEuler;

class Math
{
	public static function isPrime($n, $primes)
	{
		foreach ($primes as $p) {
			if ($n % $p === 0) {
				return false;
			}
		}

		return true;
	}
}
