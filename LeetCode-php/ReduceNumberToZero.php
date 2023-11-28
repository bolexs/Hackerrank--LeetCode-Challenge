<?php
class ReduceNumberToZero 
{
    public function numberOfSteps ($num) {
        $steps = 0;
        while($num > 0){
            if($num % 2 == 0){
                $num /= 2;
            }else{
                $num -= 1;
            }
            $steps++;
        }
        return $steps;
    } 
}



//Task 
// Given a non-negative integer num, return the number of steps to reduce it to zero.
// If the current number is even, you have to divide it by 2, otherwise, you have to subtract 1 from it.

// Solution
// i solved this problem by first identifying the steps to be taken to reduce the number to zero
// i then created a while to check if the value of $num is greater than zero
// if the value of $num is greater than zero, i then check if the value of $num is divisible by 2
// if the value of $num is divisible by 2, i then divide the value of $num by 2
// if the value of $num is not divisible by 2, i then subtract 1 from the value of $num
// i then increment the value of $steps by 1
// i then return the value of $steps

?>