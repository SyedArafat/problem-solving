<?php

//Swapping Nodes in a Linked List

//You are given the head of a linked list, and an integer k.
//
//Return the head of the linked list after swapping the values of the kth node from the beginning
//and the kth node from the end (the list is 1-indexed).

//Input: head = [1,2,3,4,5], k = 2
//Output: [1,4,3,2,5]

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $k
     * @return ListNode
     */
    function swapNodes($head, $k) {
        $arr = array();
        while($head) {
            $arr[] = $head->val;
            $head = $head->next;
        }

        for($i=0; $i<count($arr); $i++) {
            if($i+1 === $k) {
                $temp = $arr[$i];
                $arr[$i] = $arr[count($arr)-$k];
                $arr[count($arr)-$k] = $temp;
                break;
            }

        }
        $node = null;
        for($i = 0; $i<count($arr); $i++) {
            $node = new ListNode($arr[$i], $node);
        }
        $previous = null;
        while($node) {
            $temp = $node->next;
            $node->next = $previous;
            $previous = $node;
            $node = $temp;
        }
        return ($previous);

    }
}