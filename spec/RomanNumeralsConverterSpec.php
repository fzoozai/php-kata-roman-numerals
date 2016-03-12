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

    function it_calculates_the_roman_numeral_for_10()
    {
        $this->convert(10)->shouldReturn('X');
    }
//
//
//    function it_calculates_the_roman_numeral_for_112()
//    {
//        $this->convert(112)->shouldReturn('CXII');
//    }

}
