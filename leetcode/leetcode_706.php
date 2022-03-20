<?php

//Design HashMap

//Design a HashMap without using any built-in hash table libraries.
//
//Implement the MyHashMap class:
//
//MyHashMap() initializes the object with an empty map.
//    void put(int key, int value) inserts a (key, value) pair into the HashMap. If
//the key already exists in the map, update the corresponding value.
//int get(int key) returns the value to which the specified key is mapped, or -1 if this map contains no mapping
//for the key.
//void remove(key) removes the key and its corresponding value if the map contains the mapping for the key.

class MyHashMap {
    private $hashMap;
    /**
     */
    function __construct() {
        $this->hashMap = array();
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        $this->hashMap[$key] = $value;
    }

    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        if(isset($this->hashMap[$key]))
            return $this->hashMap[$key];
        else return -1;
    }

    /**
     * @param Integer $key
     * @return NULL
     */
    function remove($key) {
        unset($this->hashMap[$key]);
    }
}