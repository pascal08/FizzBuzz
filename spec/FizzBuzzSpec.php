<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{

    function it_translates_1_for_fizzbuzz()
    {
        $this->translate(1)->shouldReturn(1);
    }

    function it_translates_2_for_fizzbuzz()
    {
        $this->translate(2)->shouldReturn(2);
    }

    function it_translates_3_for_fizzbuzz()
    {
        $this->translate(3)->shouldReturn('fizz');
    }

    function it_translates_5_for_fizzbuzz()
    {
        $this->translate(5)->shouldReturn('buzz');
    }

    function it_translates_6_for_fizzbuzz()
    {
        $this->translate(6)->shouldReturn('fizz');
    }

    function it_translates_8_for_fizzbuzz()
    {
        $this->translate(9)->shouldReturn('fizz');
    }

    function it_translates_10_for_fizzbuzz()
    {
        $this->translate(10)->shouldReturn('buzz');
    }

    function it_translates_15_for_fizzbuzz()
    {
        $this->translate(15)->shouldReturn('fizzbuzz');
    }

    function it_translates_a_sequence_for_fizzbuzz()
    {
        $this->sequence(10,15)->shouldReturn(['buzz',11,'fizz',13,14,'fizzbuzz']);
    }


}
