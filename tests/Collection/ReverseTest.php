<?php

use Collections\Collection;

class ReverseTest extends PHPUnit_Framework_TestCase
{

    public function testReverse()
    {
        $c = new Collection('int', [1,2,3]);
        $r = $c->reverse();
        $this->assertEquals([3,2,1], $r->toArray());
        $this->assertEquals([1,2,3], $c->toArray());
    }
}