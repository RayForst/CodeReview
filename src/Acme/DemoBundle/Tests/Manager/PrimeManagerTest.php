<?php

namespace Acme\DemoBundle\Tests\Manager;

use Acme\DemoBundle\Manager\PrimeManager;

class PrimeManagerTest extends \PHPUnit_Framework_TestCase
{
    public function primeSelect()
    {
        $manager = new PrimeManager();

        $result = $manager->selectOnlyPrimes(range(1,1000));

        foreach ($result as $number) {
            $gmpRes = gmp_prob_prime($number);

            $this->assertEquals($gmpRes, 2);
        }
    }
}
?>
