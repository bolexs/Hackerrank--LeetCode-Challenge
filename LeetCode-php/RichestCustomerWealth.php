<?php 
class RichestCustomerWealth
{
       /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        $wealth = 0;

        foreach($accounts as $acc)
        {
            $sum = array_sum($acc);

            if($sum > $wealth)
            {
                $wealth = $sum;
            }
        }
        return $wealth;
        
    }
}

//Time Complexity: O(m x n)

//how i was able to come up with this solution

// i came up with a solution for this problem by identifying that the richest customer is the customer with the highest sum of money in their account
// then initializing $wealth variable to 0
// then i used the for each loop to iterate through the accounts external arrays, using $acc to represent the inner array
// the i represented the $sum as the sum of the inner array using the array_sum function to get the sum of the inner array
// the array_sum is an inbuilt function in php that gets the sum of the values in an array
// then i used an if statement to check if the sum of the inner array is greater than the wealth variable
// if it is then i set the wealth variable to the sum of the inner array
// then i returned the wealth variable as the richest customer


?>