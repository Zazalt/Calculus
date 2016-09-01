<?php

namespace Zazalt\Calculus\Tests;

class CalculusTest extends \PHPUnit_Framework_TestCase
{
    private $that;

    public function setUp()
    {
        $testedClassName    = str_replace('Test', '', substr(strrchr(__CLASS__, "\\"), 1));
        $testedClassPath    = 'Zazalt\\'.$testedClassName .'\\'. $testedClassName;
        require_once getcwd() . '/src/'. $testedClassName .'.php';

        // Load the rest of files
        $iterator = new \RecursiveIteratorIterator(
                new \RecursiveDirectoryIterator(getcwd() . '/src/'),
                \RecursiveIteratorIterator::SELF_FIRST);
        foreach($iterator as $file) {
            if($file->isFile()) {
                require_once $file->getRealpath();
            }
        }

        $this->that = new $testedClassPath();
    }

    public function testIsPrimeNumber()
    {
        $this->assertFalse($this->that->isPrimeNumber(1));
        $this->assertTrue($this->that->isPrimeNumber(2));
        $this->assertFalse($this->that->isPrimeNumber(4));
        $this->assertFalse($this->that->isPrimeNumber(142353));
    }

    /**
     * @docs    http://www.calculatorsoup.com/calculators/geometry-plane/distance-two-points.php
     * @docs    http://www.mathportal.org/calculators/analytic-geometry/distance-and-midpoint-calculator.php
     */
    public function testDistanceBetweenTwoPoints()
    {
        $this->assertEquals($this->that->distanceBetweenTwoPoints([0, 0], [1, 1]), 1.4142135623731);
        $this->assertEquals(round($this->that->distanceBetweenTwoPoints([0, 0], [1, 1]), 6), 1.414214);
        $this->assertEquals(round($this->that->distanceBetweenTwoPoints([0, 0], [1, 1]), 6), 1.414214);
        $this->assertEquals($this->that->distanceBetweenTwoPoints([2,4], [-2,4]), 4);
    }

    public function testResizeRectangle()
    {
        $this->assertEquals($this->that->resizeRectangle([2, 4], [2, 4]), ['width' => 2, 'height' => 4]);
        $this->assertEquals($this->that->resizeRectangle([1000, 500], [500, 500]), ['width' => 500, 'height' => 250]);
        $this->assertEquals($this->that->resizeRectangle([500, 1000], [500, 500]), ['width' => 250, 'height' => 500]);
        $this->assertEquals($this->that->resizeRectangle([1024, 814], [500, 500]), ['width' => 500, 'height' => 397]);
    }
}