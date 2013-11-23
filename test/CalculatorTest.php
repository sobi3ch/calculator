<?php

use App\Libraries\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase 
{
	public function testAdd() {
		$c = new Calculator;

		$values = [
			# integer numbers
			[0, 0, 0],
			[1, 0, 1],
			[2, 1, 1],
			[0, 1, -1],
			[-1, 0, -1],
			[-2, -1, -1],
			[60000, 30000, 30000],
			[-60000, -30000, -30000],

			# non integer numbers
			[2.8, 1.5, 1.3]
		];

		foreach ($values as $v) {
			$this->assertEquals($v[0], $c->add($v[1], $v[2]));
		}
	}

	public function testSubtract()
	{
		$c = new Calculator;

		$values = [
			# integer number
			[0, 0, 0],
			[-1, 0, 1],
			[0, 1, 1],
			[2, 1, -1],
			[1, 0, -1],
			[0, -1, -1],
			[0, 30000, 30000],
			[0, -30000, -30000],
			[60000, 30000, -30000],

			# non integer numbers
			[0.2, 1.5, 1.3]
		];

		foreach ($values as $v) {
			$this->assertEquals($v[0], $c->subtract($v[1], $v[2]));
		}
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testThrowsExceptionIfNonNumberIsPassed()
	{
		$c = new Calculator;
		$c->add('a', array());
	}
}