<?php

class FizzBuzz
{

    public function execute($number)
    {
        $solution = '';

        $divByFive = $number % 5 == 0;
        $divByThree = $number % 3 == 0;

        if($divByFive || $divByThree)
        {
            if($divByThree)
            {
                $solution .= 'fizz';
            }

            if($divByFive)
            {
                $solution .= 'buzz';
            }
        }
        else
        {
            $solution = $number;
        }

        return $solution;
    }
}
