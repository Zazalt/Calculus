<?php

namespace Zazalt\Calculus;

require dirname(__FILE__) .'/Extension/Calculus2D.php';
require dirname(__FILE__) .'/Extension/Calculus3D.php';
require dirname(__FILE__) .'/Extension/Graph.php';
require dirname(__FILE__) .'/Extension/CalculusGeo.php';

class Calculus
{
    use \Zazalt\Calculus\Extensions\Calculus2D;
    use \Zazalt\Calculus\Extensions\Calculus3D;
    use \Zazalt\Calculus\Extensions\Graph;
    use \Zazalt\Calculus\Extensions\CalculusGeo;

    /**
     * Check if a nunmber is prime based on trial division
     *
     * @param   integer $number
     * @return  boolean
     * @docs    http://en.wikipedia.org/wiki/Prime_number
     */
    public function isPrimeNumber($number)
    {
        if($number <= 3) {
            return ($number > 1);
        } else if($number % 2 === 0 || $number % 3 === 0) {
            return false;
        } else {
            for($i = 5; $i * $i <= $number; $i += 6) {
                if($number % $i === 0 || $number % ($i + 2) === 0) {
                    return false;
                }
            }
            return true;
        }
    }
}