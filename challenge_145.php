<?php
/**
 * http://www.reddit.com/r/dailyprogrammer/comments/1t0r09/121613_challenge_145_easy_tree_generation/
 */

$tree_base = $argv[1];
$trunk_character = (isset($argv[2])) ? $argv[2] : '#';
$leaves_character = (isset($argv[3])) ? $argv[3] : '*';

function printStringOfCharacters($character, $string_length) {
	for ($a = 1 ; $a <= $string_length; $a++) {
		echo $character;
	}
}

for($leaves_in_this_row = 1; $leaves_in_this_row <= $tree_base; $leaves_in_this_row += 2) {
	$white_spaces_length = ($tree_base - $leaves_in_this_row) / 2;
	
	printStringOfCharacters(' ', $white_spaces_length);
	printStringOfCharacters($leaves_character, $leaves_in_this_row);
	printStringOfCharacters(' ', $white_spaces_length);

	echo "\n";
}

$white_spaces_length = ($tree_base - 3) / 2;

printStringOfCharacters(' ', $white_spaces_length);
printStringOfCharacters($trunk_character, 3);
printStringOfCharacters(' ', $white_spaces_length);

echo "\n";

