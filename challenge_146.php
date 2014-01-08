<?php
/**
 * http://www.reddit.com/r/dailyprogrammer/comments/1tixzk/122313_challenge_146_easy_polygon_perimeter/
 */

$pi = pi();
$num_of_sides = $argv[1];
$circumradius = $argv[2];

$side_lenght = $circumradius * 2 * sin($pi / $num_of_sides); 
$perimeter   = $side_lenght * $num_of_sides;

echo $perimeter;  