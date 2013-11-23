<?php

namespace App\Libraries;

class Calculator
{
	public function add($a, $b) {
		if (!is_int($a) || !is_int($b)) {
			throw new \InvalidArgumentException;
		}
		return $a + $b;
	}

	public function subtract($a, $b)
	{
		return $a - $b;
	}
}