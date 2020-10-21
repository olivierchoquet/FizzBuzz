<?php
namespace FizzBuzz;

class FizzBuzz
{
    public function play(int $number) : string {
        if ($number == 3) return "Fizz";
        if ($number == 5) return "Buzz";

    }
}