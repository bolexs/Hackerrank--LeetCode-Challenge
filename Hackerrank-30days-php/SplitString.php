<?php

class SplitString
{

    public function __construct()
    {
        $this->splitString();
    }


    public function splitString()
    {
         $_fp = fopen("php://stdin", "r");
         $inputFromUser = fgets($_fp);
            for ($i = 0; $i < $inputFromUser; $i++)
            {
                $inputtedString = fgets($_fp);
                $even = '';
                $odd = '';

                for ($j = 0; $j < strlen($inputtedString); $j++)
                    {
                        if ($j % 2 == 0)
                        {
                            $even .= $inputtedString[$j];
                        }
                            else
                            {
                                $odd .= $inputtedString[$j];
                            }
                    }
            }
    }
}
// Task
// Given a string, S, of length N that is indexed from 0 to N-1, print its even-indexed and odd-indexed characters as 2 space-separated strings on a single line (see the Sample below for more detail).

// this solution has not me been fully worked on and understood by me, when i have i will update this file with my thought process and understanding of the solution.


?>