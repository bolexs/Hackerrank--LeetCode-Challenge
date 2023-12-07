<?php

class SplitEvenAndOdd
{
    public function __construct()
    {
        $this->SpliceString();
    }

    public function SpliceString()
    {
        $_fp = fopen("php://stdin", "r");
        $inputFromUser = fgets($_fp);

        for($i = 0; $i < $inputFromUser; $i++)
        {
            $inputtedString = fgets($_fp);
            $even = '';
            $odd = '';

            for($j = 0; $j < strlen($inputtedString); $j++)
            {
                if($j % 2 == 0)
                {
                    $even .= $inputtedString[$j];

                } else {
                    $odd .= $inputtedString[$j];
                }
            }
            echo $even . " " . $odd . "\n";
        }

        
    }
}

// Task
// Given a string, S, of length N that is indexed from 0 to N-1, print its even-indexed and odd-indexed characters as 2 space-separated strings on a single line.

// Solution

// i firstly declared the inputFromUser variable to get the number of inputs from the user, i.e 2, 3 and so on
// i then created a for loop to loop through the number of inputs from the user
// in the for loop, i then declared the inputtedString variable to get the string that has been inputted by the user
// then declared a variable called even and odd to store even and odd characters respectively and assigned an empty string to them
// i then created another for loop to iterate through the string length of the inputtedString variable
// i then used the modulus operator to check if the index of the string is even or odd
// if the index is even, the index j of the inputtedString is concatenated to the even variable
// else if the index is odd, the index j of the inputtedString is concatenated to the odd variable
// after the for loop, i then echoed the even and odd variables with a space in between them