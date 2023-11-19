<?php
class Person{
    public $age;
   public function __construct($initialAge){
          // Add some more code to run some checks on initialAge
          $this->age = $initialAge;
          if($initialAge < 0)
          {
              $this->age = 0;
              print('Age is not valid, setting age to 0.' . "\n");
          }

    }
   public  function amIOld(){
            // Do some computations in here and print out the correct statement to the console 
            if($this->age < 13)
            {
                print('You are young.' . "\n");
            } 
            else if ($this->age >= 13 && $this->age < 18)
            {
                print('You are a teenager.' . "\n");
            } 
            else {
                print('You are old.' . "\n");
            }
    }
   public  function yearPasses(){
          // Increment the age of the person in here
             $this->age++;
    }
   
      
}

// Task
// Write a Person class with an instance variable, age, and a constructor that takes an integer, initialAge, as a parameter.
// The constructor must assign initialAge to age after confirming the argument passed as initialAge is not negative; if a negative argument is passed as initialAge, the constructor should set age to 0 and print Age is not valid, setting age to 0..
// In addition, you must write the following instance methods:
// 1. yearPasses() should increase the age instance variable by 1.
// 2. amIOld() should perform the following conditional actions:
// If age < 13, print You are young..
// If age >= 13 and age < 18, print You are a teenager..
// Otherwise, print You are old..

// Solution
// i solved this problem by first defining our class as Person
// then i defined our instance variable as $age
// then i defined our constructor as __construct($initialAge) and passed $initialAge as a parameter
// then i used an if statement to check if $initialAge is less than 0, if the condition is true it should set $age to 0 and print Age is not valid, setting age to 0.
// then i defined our amIOld() method and used an if statement to check if $age is less than 13, if the condition is true it should print You are young.
// then i used an else if statement to check if $age is greater than or equal to 13 and less than 18, if the condition is true it should print You are a teenager.
// then i used an else statement to print You are old.
// then i defined our yearPasses() method and used the increment operator to increment the value of $age by 1

$solution = new Person(10);
$solution->amIOld();
$solution->yearPasses();


?>
