<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{

    function it_does_not_translate_a_number_not_divisible_for_fizzbuzz()
    {
        $this->translate(1)->shouldReturn(1);
    }

    function it_translates_a_number_divisible_by_three_for_fizzbuzz()
    {
        $this->translate(3)->shouldReturn('fizz');
        $this->translate(6)->shouldReturn('fizz');
    }

    function it_translates_a_number_divisible_by_five_for_fizzbuzz()
    {
        $this->translate(5)->shouldReturn('buzz');
        $this->translate(10)->shouldReturn('buzz');
    }

    function it_translates_a_number_divisible_by_fifteen_for_fizzbuzz()
    {
        $this->translate(15)->shouldReturn('fizzbuzz');
    }

    function it_translates_a_sequence_for_fizzbuzz()
    {
        $this->sequence(10, 15)->shouldReturn(['buzz', 11, 'fizz', 13, 14, 'fizzbuzz']);
    }

    function it_supports_a_custom_fizzbuzz_word_for_any_number()
    {
        $this->setTranslation(4, 'foo');

        $this->translate(4)->shouldReturn('foo');
        $this->sequence(4, 8)->shouldReturn(['foo', 'buzz', 'fizz', 7, 'foo']);
    }


}
