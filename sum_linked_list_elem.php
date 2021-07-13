<?php
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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        
        $result = [];
        $i = 0;
        $UPlace = 0;
        $TPlace = 0;
        while($i < count($l1) || $i < count($l2)) {
            
            $n1 = isset($l1[$i]) && !empty($l1[$i]) ? $l1[$i] : 0;
            $n2 = isset($l2[$i]) && !empty($l2[$i]) ? $l2[$i] : 0;
            $sum = $n1 + $n2 + $TPlace;
            $UPlace = $sum % 10;
            $TPlace = floor($sum / 10);
            $result[$i] = $UPlace;
            $i += 1;
        }
	if($TPlace != 0) {
		$result[$i] = $TPlace;
	}
        return $result;
    }
}

/*
$l1 = [9, 9, 9];
$l2 = [9, 9];

array(4) {
  [0]=>
  int(8)
  [1]=>
  int(9)
  [2]=>
  int(0)
  [3]=>
  int(1)
}
*/
$s = new Solution();
$l1 = [3,3];
$l2 = [5,6, 7];
/*
array(3) {
  [0]=>
  int(8)
  [1]=>
  int(9)
  [2]=>
  int(7)
}
*/
$result = $s->addTwoNumbers($l1, $l2);
var_dump($result);

