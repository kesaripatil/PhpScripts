<?php



/*
 * Complete the 'countDuplicate' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY numbers as parameter.
 */

function countDuplicate($numbers) {
    // Write your code here
	$countOfElements = array_count_values($numbers);
	$cntDuplicateElements = 0;
	array_walk_recursive($countOfElements, function($value, $key) use (&$cntDuplicateElements){
		if($value > 1) {
			$cntDuplicateElements++;
		}
	});
	echo "Count of duplicate elements : $cntDuplicateElements \n";
	return $cntDuplicateElements;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$numbers_count = intval(trim(fgets(STDIN)));

$numbers = array();

for ($i = 0; $i < $numbers_count; $i++) {
    $numbers_item = intval(trim(fgets(STDIN)));
    $numbers[] = $numbers_item;
}

$result = countDuplicate($numbers);

//fwrite($fptr, $result . "\n");

//fclose($fptr);

