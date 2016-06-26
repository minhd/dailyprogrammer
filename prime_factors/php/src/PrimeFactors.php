<?php

class PrimeFactors
{
    /**
     * Generate the Prime Factors for a given number
     * @param  int $number
     * @return array
     */
    public function generate($number)
    {
        $primes = [];

        $candidate = 2;
        for (;$number>1;$candidate++) {
            for (;$number % $candidate == 0;$number /= $candidate) {
                $primes[] = $candidate;
            }
        }

        return $primes;
    }
}
