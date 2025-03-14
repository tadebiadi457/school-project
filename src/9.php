<?php
// Create an array of colors
$colors = array("red", "blue", "green", "yellow");

// Get a random color from the array
$random_color = $colors[array_rand($colors)];

// Print the random color to the page
echo $random_color;
?>