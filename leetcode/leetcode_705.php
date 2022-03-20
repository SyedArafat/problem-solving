<?php

//Design HashSet
//
//Design a HashSet without using any built-in hash table libraries.
//
//Implement MyHashSet class:
//
//void add(key) Inserts the value key into the HashSet.
//bool contains(key) Returns whether the value key exists in the HashSet or not.
//void remove(key) Removes the value key in the HashSet. If key does not exist in the HashSet, do nothing.

class MyHashSet {
    private $hashSet;

    /**
     */
    function __construct() {
        $this->hashSet = array();
    }

    /**
     * @param Integer $key
     * @return NULL
     */
    function add($key) {
        $this->hashSet[$key] = 0;
    }

    /**
     * @param Integer $key
     * @return NULL
     */
    function remove($key) {
        unset($this->hashSet[$key]);
    }

    /**
     * @param Integer $key
     * @return Boolean
     */
    function contains($key) {
        return isset($this->hashSet[$key]);
    }
}

/**
 * Your MyHashSet object will be instantiated and called as such:
 * $obj = MyHashSet();
 * $obj->add($key);
 * $obj->remove($key);
 * $ret_3 = $obj->contains($key);
 */