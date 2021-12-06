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

      for ($i = 0; $i < $sLength; $i++) {
        $pos = strpos($t, $s[$i]);

        if ($pos !== false)
          $t[$pos] = " ";
        else
          return false;
      }
      return true;
  }

  /**
   * @param String $s
   * @param String $t
   * @return Boolean
   */
  function isAnagramMap($s, $t) {
    $sLength = strlen($s);
    $tLength = strlen($t);
    if ($sLength !== $tLength) return false;
    $sMap = [];
    $tMap = [];
    
    for ($i = 0; $i < $sLength; $i++) {
      $sMap[$s[$i]] = ($sMap[$s[$i]] ?? 0) + 1;
      $tMap[$t[$i]] = ($tMap[$t[$i]] ?? 0) + 1;
    }

    return $sMap==$tMap;
  }
}

$sol = new Solution();

// var_dump($sol->isAnagram("anagram", "nagaram"));

// var_dump($sol->isAnagram("rat", "car"));


var_dump($sol->isAnagramMap("anagram", "nagaram"));

var_dump($sol->isAnagramMap("rat", "car"));