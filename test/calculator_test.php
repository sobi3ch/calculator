<?php

require 'vendor/autoload.php';


use App\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase 
{
	public function testAdd() {
		$c = new Calculator;

		$this->assertEquals(0, $c->add(0, 0));
		$this->assertEquals(1, $c->add(0, 1));
		$this->assertEquals(2, $c->add(1, 1));
		$this->assertEquals(0, $c->add(1, -1));
		$this->assertEquals(-1, $c->add(0, -1));
		$this->assertEquals(-2, $c->add(-1, -1));
		$this->assertEquals(60000, $c->add(30000, 30000));
		$this->assertEquals(-60000, $c->add(-30000, -30000));
	}

	public function testSubtract()
	{
		$c = new Calculator;

		$this->assertEquals(0, $c->subtract(0, 0));
		$this->assertEquals(-1, $c->subtract(0, 1));
		$this->assertEquals(0, $c->subtract(1, 1));
		$this->assertEquals(2, $c->subtract(1, -1));
		$this->assertEquals(1, $c->subtract(0, -1));
		$this->assertEquals(0, $c->subtract(-1, -1));
		$this->assertEquals(0, $c->subtract(30000, 30000));
		$this->assertEquals(0, $c->subtract(-30000, -30000));
		$this->assertEquals(60000, $c->subtract(30000, -30000));
	}
}