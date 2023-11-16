<?php

class Operators
{

    public function solve($meal_cost, $tip_percent, $tax_percent) {
        // Write your code here
        $tip = $tip_percent/100 * $meal_cost;
        $tax = $tax_percent/100 * $meal_cost;
        
        $result = $meal_cost + $tip + $tax;
        print(round($result));
        
    }
    
}

$solution = new Operators();
$solution->solve(200, 15, 8);

// Task
// Given the meal price (base cost of a meal), tip percent (the percentage of the meal price being added as tip), and tax percent (the percentage of the meal price being added as tax) for a meal, find and print the meal's total cost.

//Solution

// i solved this problem by first defining the tip and tax variables as the tip_percent/100 * meal_cost and tax_percent/100 * meal_cost respectively
// then i defined the result variable as the sum of the meal_cost, tip and tax
// then i printed the result variable using the round function to round the result to the nearest integer
// then i called the solve function using the $solution variable
// then i passed the arguments to the solve function


//Time Complexity: O(1)

?>