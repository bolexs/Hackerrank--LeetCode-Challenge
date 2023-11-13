<?php

$_fp = fopen("php://stdin", "r");

$inputString = fgets($_fp); // get a line of input from stdin and save it to our variable

// Your first line of output goes here
print("Hello, World.\n");

// Write the second line of output
print($inputString);
fclose($_fp);

// Objective
// to review basic concepts that will get me started, using some syntax to read input and write output

// Task

// save a line of input from stdin to a variable, print Hello, World. on a single line and my variable pn the second line.

// how i was able to accomplish this task

// print the $inputString variable on the line after Hello World using print($inputString);



?>