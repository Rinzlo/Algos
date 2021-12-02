<?php
class Solution {

  /**
   * @param String $s
   * @return Integer
   */
  function firstUniqChar($s) {
      for ($i = 0; $i < strlen($s); $i++) {
        // cache for readability
        $el = $s[$i];
        // get first element in the entire array.
        $first = strpos($s, $el);
        // search beyond first location for element.
        $next = strpos($s, $el, $first + 1);
        // return current location if second location doesn't exist.
        if(!($next)) return $i;
      }
      return -1;
  }
}

$sol = new Solution();

echo $sol->firstUniqChar("leetcode");
// 0
echo "\r\n";

echo $sol->firstUniqChar("loveleetcode");
// 2
echo "\r\n";

echo $sol->firstUniqChar("aabb");
// -1
echo "\r\n";