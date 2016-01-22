<?php

class FizzBuzz
{

    /**
     * @var array
     */
    protected $translations = [
        [15, 'fizzbuzz'],
        [5, 'buzz'],
        [3, 'fizz']
    ];

    /**
     * @param $number
     * @param $word
     */
    public function setTranslation($number, $word)
    {
        if (!is_int($number)) {
            throw new \InvalidArgumentException();
        }

        if (!is_string($word)) {
            throw new \InvalidArgumentException();
        }

        $this->translations[] = [$number, $word];

        $this->sortTranslations();
    }

    /**
     *
     */
    private function sortTranslations()
    {
        usort($this->translations, function ($a, $b) {
            return $b[0] - $a[0];
        });
    }

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
        foreach ($this->translations as $translation) {
            $num = $translation[0];
            $word = $translation[1];

            if ($number % $num == 0) {
                return $word;
            }
        }

        return $number;
    }
}
