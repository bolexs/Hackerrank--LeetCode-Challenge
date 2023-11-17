<?php 

class ConditionalState 
{
    public function calc ($N)
    {
        //$N = intval(trim(fgets(STDIN)));

$even = $N % 2 == 0;

if ($N % 2 != 0)
{
    print("Weird");
} 
else if ($even && $N >= 2 && $N <=5 )
{
    print("Not Weird");
} 
else if ($even && $N >= 6 && $N <= 20)
{
    print("Weird");
} 
else if ($even && $N > 20)
{
    print("Not Weird");
}
 else {
    print('didn;t work');
}

    }
}

// Task
// Given an integer, n, perform the following conditional actions:
// If n is odd, print Weird
// If n is even and in the inclusive range of 2 to 5, print Not Weird
// If n is even and in the inclusive range of 6 to 20, print Weird
// If n is even and greater than 20, print Not Weird

// Solution
// i solved this problem by first declaring the $even variable to check if the number is even or not and also to avoid reuse of code
// i then used an if statement to check if the number is odd, if the condition is true it should print weird using $N % 2 != 0
// i then used an else if statement to check if the number is even and in the inclusive range of 2 to 5, if the condition is true it should print Not Weird using $even && $N >= 2 && $N <=5
// i then used an else if statement to check if the number is even and in the inclusive range of 6 to 20, if the condition is true it should print Weird using $even && $N >= 6 && $N <= 20
// i then used an else if statement to check if the number is even and greater than 20, if the condition is true it should print Not Weird using $even && $N > 20
// i then used an else statement to print didn't work if the above conditions are not true

// Time Complexity: O(1)

$solution = new ConditionalState();
$solution->calc(12);

?>