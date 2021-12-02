<?php
class Solution
{

  /**
   * @param String $s
   * @return Boolean
   */
  function isPalindrome($s)
  {
    $s = preg_replace("/[^a-zA-Z0-9]/", "", $s);
    $s = strtolower($s);

    $length = strlen($s);
    if ($length < 1) return true;

    // echo $s . "\r\n";

    for ($i = 0; $i < $length; $i++) {
      echo $s[$i] . "\r\n";
      echo ($length - 1 - $i) . "\r\n";
      echo $s[$length - 1 - $i] . "\r\n";
      echo "\r\n";
      if ($s[$i] !== $s[$length - 1 - $i])
        return false;
    }

    return true;
  }
}

$sol = new Solution();
$result = $sol->isPalindrome("0P");
// $result = $sol->isPalindrome("A man, a plan, a canal: Panama");
// $result = $sol->isPalindrome("race a car");

echo "\r\n";
var_dump($result);