<?php

use App\Libraries\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase 
{
	public function setUp()
	{
		$this->calc = new Calculator;
	}

	public function inputForTestAdd()
	{
		return [
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
	}

	/**
	 * @dataProvider inputForTestAdd
	 */
	public function testAdd($result, $a, $b) 
	{
		$this->assertEquals($result, $this->calc->add($a, $b));
	}




	public function inputFortestSubtract()
	{
	    return [
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
	}

	/**
	 * @dataProvider inputFortestSubtract
	 */
	public function testSubtract($result, $a, $b)
	{
		$this->assertEquals($result, $this->calc->subtract($a, $b));
	}
}