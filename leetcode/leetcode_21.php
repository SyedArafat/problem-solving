<?php

//You are given the heads of two sorted linked lists list1 and list2.
//
//Merge the two lists in a one sorted list. The list should be made by splicing together the nodes
// of the first two lists.
//
//Return the head of the merged linked list.

//Input: list1 = [1,2,4], list2 = [1,3,4]
//Output: [1,1,2,3,4,4]

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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        $old = $new = new ListNode();
        while(1) {
            if($list1 !=null && $list2 !=null) {
                if($list1->val > $list2->val) {
                    $temp = $list2->next;
                    $list2->next = null;
                    $new->next = $list2;
                    $list2 = $temp;
                    $new = $new->next;
                } else {
                    $temp = $list1->next;
                    $list1->next = null;
                    $new->next = $list1;
                    $list1 = $temp;
                    $new = $new->next;

                }
            } elseif($list1) {
                $new->next = $list1;
                break;
            } elseif($list2) {
                $new->next = $list2;
                break;
            } else {
                break;
            }

        }
        return $old->next;

    }
}