<?php

$list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo 'Index: '.binary_search($list, 5);

function binary_search($list, $item) {
	$low = 0;
	$high = sizeof($list) - 1;
	$steps = 0;

	while($low <= $high) {
		$steps++;

		$mid = round(($low + $high) / 2);
		$guess = $list[$mid];

		if($guess == $item) {
			echo 'Steps: '.$steps.' ';
			return $mid;
		}elseif($guess > $item) {
			$high = $mid - 1;
		}else{
			$low = $mid + 1;
		}
	}

	return false;
}

?>