<?php

class Solution {

  /**
   * @param String[] $s
   * @return NULL
   */
  function reverseString(&$s) {
      $length = count($s);
      $halfLength = $length/2;
      $tmp = null;
      for ($l = 0; $l < $halfLength; $l++) {
        $r = $length-1-$l;
        $tmp = $s[$l];
        $s[$l] = $s[$r];
        $s[$r] = $tmp;
      }
  }
}

$sol = new Solution();
$ref = ["h","e","l","l","o"];
$sol->reverseString($ref);
print_r($ref);
// var_dump($hello);

$ref = ["H","a","n","n","a","h"];
$sol->reverseString($ref);
print_r($ref);
// var_dump($hannah);