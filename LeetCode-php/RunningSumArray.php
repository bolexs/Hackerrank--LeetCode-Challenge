<?php

//Task 

//Given an array nums. We define a running sum of an array as runningSum[i] = sum(nums[0]…nums[i]).
//Return the running sum of nums.

//My Solution
class RunningSumArray 
{
    /**
     * @param Integer[]
     * @return Integer[]
     */
    function runningSum($nums) 
    {
        $currentNo[0] = $nums[0];

        for($i = 1; $i < sizeof($nums); $i++)
        {
            $currentNo[$i] = $nums[$i] + $currentNo[$i -1];
        }
        return $currentNo;
    }

    //Time Complexity: O(n)
    //how i was able to come up with this solution
    // i came up with a solution for this problem by identifying that the current number is the sum of the current number and the previous number aside from that of the first number which is the index 0 in an array
    // after defining that i stored the first number in the array as currentNo[0] and then used a for loop to iterate through the array, using the following params;
    // $i = 1 , $i < sizeOf($nums) array and $i++ to iterate through the array
    // the sizeOf function gets the size/length of the array 
    // $i++ then increments the value of $i by 1
    // then i defined the currentNo[$i] as the sum of the current number and the previous number which is $nums[$i] + $currentNo[$i -1]
    // then i returned the currentNo array
}


$solution = new RunningSumArray();
$solution()->runningSum([1,2,3,4]);


?>