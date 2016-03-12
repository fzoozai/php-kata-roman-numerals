<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralsConverterSpec extends ObjectBehavior
{
    function it_calculates_the_roman_numeral_for_1()
    {
        $this->convert(1)->shouldReturn('I');
    }
    function it_calculates_the_roman_numeral_for_2()
    {
        $this->convert(2)->shouldReturn('II');
    }
    function it_calculates_the_roman_numeral_for_5()
    {
        $this->convert(5)->shouldReturn('V');
    }
}
