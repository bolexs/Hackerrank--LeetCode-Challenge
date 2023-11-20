<?php

class SimpleLoops 
{
    public function __construct()
    {
        $this->loop();
    }


    public function loop ()
    {
        $n = intval(trim(fgets(STDIN)));
        for($i = 1; $i <= 10; $i++)
            {
                $result = $n * $i;
                print("$n x $i = $result " ."\n");
            }
    }

// Task
// Given an integer, n, print its first 10 multiples. Each multiple n x i (where 1 <= i <= 10) should be printed on a new line in the form: n x i = result.

// How i solved this problem

// I used a for loop to iterate through the first 10 multiples of the given integer. I then multiplied the given integer by the current iteration of the loop and stored the result in a variable. I then printed the result in the format required by the problem.

//Time Complexity: O(n)
//Space Complexity: O(1)
}


?>