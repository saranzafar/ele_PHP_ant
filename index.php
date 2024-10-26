<?php
// function happy_bithday($name, $age)
// {
//     echo "Happy birthday {$name}. You'r {$age} years old<br>";
// }
// happy_bithday("Sam", 10);
// happy_bithday("Saran", 30);
// happy_bithday("Ali", 44);

function is_even($number)
{
    $result = $number % 2;
    // if ($result == 0) {
    //     echo "Number is even";
    // } else {
    //     echo "Number is odd";
    // }
    return $result;
}
echo "Number is ", is_even(01);
