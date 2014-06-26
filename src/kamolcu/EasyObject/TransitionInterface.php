<?php
namespace kamolcu\EasyObject;

interface TransitionInterface {
    /**
     * Returns the name of the transition
     *
     * @return string
     */
    public function getName();
    /**
     * Returns the array of states that this transition can start from
     *
     * @return array
     */
    public function getBeginStates();
}
