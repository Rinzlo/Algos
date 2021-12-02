<?php
class Solution {

  /**
   * @param String $s
   * @param String $t
   * @return Boolean
   */
  function isAnagram($s, $t) {
      $sLength = strlen($s);
      $tLength = strlen($t);
      if ($sLength !== $tLength) return false;

      
  }
}

$sol = new Solution();

var_dump($sol->isAnagram("anagram", "nagaram"));

var_dump($sol->isAnagram("rat", "car"));