<?php
$username = "The Bro Code";
$phone = "123-456-789";
// $username = strtolower($username);
// $username = strtoupper($username);
// $username = trim($username);
// $username = str_pad($username, 20, "0");
// $username = str_replace("-", "", $phone);
// $username = strrev($phone);
// $username = str_shuffle($phone);
// $username = strcmp($username, "Bro Code");//return 0 if both are same
// $username = strlen($username);
// $username = strpos($phone, "-");
// $username = substr($username, 0, 5);
// $username = substr($username, 5);
// $username = substr($username, 5);
$username = explode(" ", $username); //convert it into array on basis of spaces
$username = implode("-", $username);

echo $username;
// foreach ($username as $key => $value) {
//     echo $key, $value,"<br>";
// }
