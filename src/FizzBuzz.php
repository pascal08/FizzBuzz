<?php

class FizzBuzz
{

    /**
     * @param $from
     * @param $to
     * @return array
     */
    public function sequence($from, $to)
    {
        $solution = [];

        for ($i = $from; $i <= $to; $i++) {
            $solution[] = $this->translate($i);
        }

        return $solution;
    }

    /**
     * @param $number
     * @return string
     */
    public function translate($number)
    {
        if ($number % 15 == 0) {
            return 'fizzbuzz';
        }
        if ($number % 5 == 0) {
            return 'buzz';
        }
        if ($number % 3 == 0) {
            return 'fizz';
        }

        return $number;
    }
}
