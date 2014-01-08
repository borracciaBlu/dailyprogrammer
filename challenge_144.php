<?php
/**
 * http://www.reddit.com/r/dailyprogrammer/comments/1sob1e/121113_challenge_144_easy_nuts_bolts/
 */
$file_lines = file("file2.txt");
$line_separator = $file_lines[0];
$items_to_update = array();

for($a = 1; $a < count($file_lines); $a++) {
	$item = trim($file_lines[$a]);
	list($item_label, $price) = explode("  ", $item);

	if (!isset($items_to_update[$item_label])) {
		$items_to_update[$item_label] = $price;
	} else {
		$items_to_update[$item_label] = $price - $items_to_update[$item_label];
	}	

}

foreach ($items_to_update as $label => $change_price) {
	if ($change_price != 0) {
		echo "$label :: $change_price\n";
	}
}