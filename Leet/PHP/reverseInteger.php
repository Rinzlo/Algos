<?php

class Solution {

  /**
   * @param Integer $x
   * @return Integer
   */
  function reverse($x) {
      $res = ($x < 0 ? -1 : 1) * intval(strrev(abs((int)$x)));
      return ($res >= 2**31-1 || $res <= -2**31) ? 0 : $res;
  }

}

$sol = new Solution();

echo $sol->reverse(123) . "\r\n";
echo $sol->reverse(-123) . "\r\n";
echo $sol->reverse(120) . "\r\n";
echo $sol->reverse(0) . "\r\n";