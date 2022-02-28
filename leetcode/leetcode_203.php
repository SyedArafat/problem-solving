<?php

//Remove Linked List Elements

//Given the head of a linked list and an integer val, remove all the nodes of the linked list
//that has Node.val == val, and return the new head.

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
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val) {
        $dummy = new ListNode(-100, $head);
        $pre = $dummy;
        $curr = $head;
        while($curr) {
            if($curr->val === $val) {
                $pre->next = $curr->next;
            } else {
                $pre = $pre->next;
            }
            $curr = $curr->next;
            // print_r($pre);
        }
        return ($dummy->next);
    }
}