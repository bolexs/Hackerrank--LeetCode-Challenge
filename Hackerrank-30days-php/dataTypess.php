<?php
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";
// Declare second integer, double, and String variables.
integer: $plus;
double: $deci;
string: $stri;
// Read and save an integer, double, and String to your variables.
$plus = 12;
$deci = 4.0;
$stri = 'is the best place to learn and practice coding!';
// Print the sum of both integer variables on a new line.
print(($plus + $i) . "\n");
// Print the sum of the double variables on a new line.
print(number_format($deci + $d, 1) . "\n");
// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
print($s . $stri);
fclose($handle);

// Task
// Declare 3 variables: one of type int, one of type double, and one of type String.
// Read 3 lines of input from stdin (according to the sequence given in the Input Format section below) and initialize your 3 variables.
// Use the + operator to perform the following operations:
    // Print the sum of i plus your int variable on a new line.
    // Print the sum of d plus your double variable to a scale of one decimal place on a new line.
    // Concatenate s with the string you read as input and print the result on a new line.

//How i was able to accomplish this task
// i declared the variables as instructed using integer: , double: and string:
// i then read the input from stdin and saved it to the variables
// i then printed the sum of the variables using the + operator
?>