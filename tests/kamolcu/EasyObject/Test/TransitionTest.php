<?php
namespace kamolcu\EasyObject\Test;

use kamolcu\EasyObject\Transition;

class TransitionTest extends \PHPUnit_Framework_TestCase
{
    public function testCheckTransitionObject() {
        $trans = new Transition();
        $this->assertInstanceOf('kamolcu\EasyObject\TransitionInterface', $trans);
    }
}
