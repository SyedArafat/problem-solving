<?php
//Min Stack
//Design a stack that supports push, pop, top, and retrieving the minimum element in constant time.
//
//Implement the MinStack class:
//
//MinStack() initializes the stack object.
//void push(int val) pushes the element val onto the stack.
//void pop() removes the element on the top of the stack.
//int top() gets the top element of the stack.
//int getMin() retrieves the minimum element in the stack.

class leetcode_115 {
    private $stack = array();
    /**
     */
    function __construct() {

    }

    /**
     * @param Integer $val
     * @return NULL
     */
    function push($val) {
        $this->stack[] = $val;
    }

    /**
     * @return NULL
     */
    function pop() {
        return array_pop($this->stack);
    }

    /**
     * @return Integer
     */
    function top() {
        $last = count($this->stack) - 1;
        return $this->stack[$last];
    }

    /**
     * @return Integer
     */
    function getMin() {
        foreach ($this->stack as $value) {
            if(!isset($min) || $value<$min) {
                $min = $value;
            }
        }
        return $min;
    }
}