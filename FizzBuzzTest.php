<?php
namespace FizzBuzz;
require "FizzBuzz.php";

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testFizz()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals('Fizz', $fizzbuzz->play(3));
    }
}
