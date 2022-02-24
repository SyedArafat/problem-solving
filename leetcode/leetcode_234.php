<?php
//Palindrome Linked List
//Given the head of a singly linked list, return true if it is a palindrome.



/**
 * @param ListNode $head
 * @return Boolean
 */
function isPalindrome($head) {
    $slow = $fast = $head;
    while(isset($head->next)) {
        $slow = $slow->next;
        $fast = $fast->next->next;
        if($fast->next === null) {
            break;
        }
    }

    $previous = null;
    while($slow) {
        $temp = $slow->next;
        $slow->next = $previous;
        $previous = $slow;
        $slow = $temp;
    }

    while(($previous)) {
        if($previous->val !== $head->val) {
            return false;
        }
        $previous = $previous->next;
        $head = $head->next;
    }
    return true;

}