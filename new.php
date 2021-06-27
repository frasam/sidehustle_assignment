<?php
// 1. Write a range function that takes two arguments, start and end, and returns an array containing all the numbers from start up to (and including) end. Next, 

// 2. write a sum function that takes an array of numbers and returns the sum of these numbers.

// solution to question 1
$thenumbers = range(1,10);
echo "the numbers are: <br>";
foreach($thenumbers as $i){
    echo "$i <br>";
    
}
echo "<br>";
echo "<br>";
echo "<br>";
//solution to question 2
$thesum = array(
    12,
    45,
    67,
    56,
    78
);
echo "the sum of the numbers in the array is:    ";
print_r(array_sum($thesum));


?>

