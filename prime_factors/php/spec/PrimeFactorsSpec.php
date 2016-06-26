<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorsSpec extends ObjectBehavior
{

    public function it_primeOf1and2and3()
    {
        $this->generate(1)->shouldReturn([]);
        $this->generate(2)->shouldReturn([2]);
        $this->generate(3)->shouldReturn([3]);
    }

    public function it_primeOf4()
    {
        $this->generate(4)->shouldReturn([2,2]);
    }

    public function it_primeOf5()
    {
        $this->generate(5)->shouldreturn([5]);
    }

    public function it_primeOf8()
    {
        $this->generate(8)->shouldReturn([2,2,2]);
    }

    public function it_primeOf9()
    {
        $this->generate(9)->shouldReturn([3,3]);
    }

    public function it_primeOf100()
    {
        $this->generate(100)->shouldreturn([2,2,5,5]);
    }
}
