<?php

namespace Verraes\Lambdalicious\Tests;

final class examplesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function examples_01_atoms_and_lists()
    {
        include __DIR__ . '/../../../../examples/01-atoms-and-lists.php';
    }

    /**
     * @test
     */
    public function examples_02_functions()
    {
        include __DIR__ . '/../../../../examples/02-functions.php';
    }

    /**
     * @test
     */
    public function examples_03_conditionals()
    {
        include __DIR__ . '/../../../../examples/03-conditionals.php';
    }
}
 