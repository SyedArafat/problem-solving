<?php

//Remove Duplicates from Sorted List

//Given the head of a sorted linked list, delete all duplicates such that each element appears only once.
//Return the linked list sorted as well.

//Input: head = [1,1,2]
//Output: [1,2]

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
     * @return ListNode
     */
    function deleteDuplicates($head) {
        $dummy = $pre = $head;
        $curr = $head->next;
        while($curr) {
            if($pre->val === $curr->val) {
                $pre->next = $curr->next;
            } else {
                $pre = $pre->next;
            }
            $curr = $curr->next;
        }

        return ($dummy);

    }
}