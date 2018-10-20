<?php

namespace App\Tests;

class FirstTest extends \PHPUnit_Framework_TestCase
{
    public function testPushAndPop()
    {
        $stack = array();
        $this->assertEquals(0, count($stack));

        array_push($stack, 'sa');
        $this->assertEquals('sa', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('sa', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }
}