<?php

//Given the head of a singly linked list, return the middle node of the linked list.
//
//If there are two middle nodes, return the second middle node.

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
class leetcode_876 {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function middleNode($head) {
        $fast = $head;
        while($fast->next) {
            $head = $head->next;
            $fast = $fast->next->next;
        }
        return $head;
    }
}