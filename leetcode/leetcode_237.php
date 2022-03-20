<?php

//Delete Node in a Linked List
//
//Write a function to delete a node in a singly-linked list. You will not be given access to the head of the list,
// instead you will be given access to the node to be deleted directly.
//
//It is guaranteed that the node to be deleted is not a tail node in the list.

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {
    /**
     * @param ListNode $node
     * @return
     */
    function deleteNode($node) {
        $node->val = $node->next->val;
        $node->next = $node->next->next;
    }
}