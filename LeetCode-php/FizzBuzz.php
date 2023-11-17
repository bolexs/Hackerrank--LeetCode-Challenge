<?php

class FizzBuzz
{
    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) 
    {
        $ans = [];

        for($i = 1; $i <= $n; $i++)
        {
            if($i % 15 == 0)
            {
                $ans[] = "FizzBuzz";
            }
            else if ($i % 3 == 0)
            {
                $ans[] = "Fizz"; 
            }
            else if ( $i % 5 == 0)
            {
                $ans[] = "Buzz";
            }
            else {
                $ans[] = (string)$i;
            }
        }
        return $ans;

    }


}
// Time Complexity: O(n)

// Task
//Given an integer n, return a string array answer (1-indexed) where:
//   answer[i] == "FizzBuzz" if i is divisible by 3 and 5.
//  answer[i] == "Fizz" if i is divisible by 3.
//  answer[i] == "Buzz" if i is divisible by 5.
//  answer[i] == i if non of the above conditions are true.

//Solution
// i solved this problem by first defining our array as $ans = [], which will be used to sort the numbers that has been iterated through
// then i used a for loop to iterate through the numbers from 1 to n using the following params; and incrementing the value of $i by 1
// then used checked the condition in the statement using an if statement to first confirm if i is divisible by 15, if the condition is true it should print fizzbuzz
// then i used an else if statement to check if i is divisible by 3, if the condition is true it should print fizz
// then i used an else if statement to check if i is divisible by 5, if the condition is true it should print buzz
// then i used an else statement to print the number if the above conditions are not true and used to string to convert the number to a string and push it into our ans array
// then i finally returned the ans as our result




?>