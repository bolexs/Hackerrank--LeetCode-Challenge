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

// this solution has not me been fully worked on and understood by me, when i have i will update this file with my thought process and understanding of the solution.