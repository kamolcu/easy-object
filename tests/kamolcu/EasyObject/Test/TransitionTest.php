<?php
namespace kamolcu\EasyObject\Test;

use kamolcu\EasyObject\Transition;

class TransitionTest extends \PHPUnit_Framework_TestCase
{
    private $trans;
    public function setUp(){
        $this->trans = new Transition();
    }
    public function testCheckTransitionObject() {
        $this->assertInstanceOf('kamolcu\EasyObject\TransitionInterface', $this->trans);
    }

    public function testTransitionHasGetName() {
        $this->assertTrue(method_exists($this->trans, 'getName'));
    }

    public function testTransitionHasGetBeginStates() {
        $this->assertTrue(method_exists($this->trans, 'getBeginStates'));
    }
}
