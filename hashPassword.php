<?php
$password = "pizza123";

$hashed_password = password_hash($password, PASSWORD_DEFAULT); //bcrypt algorithm
// echo $hashed_password;
if (password_verify("pizza123", $hashed_password)) {
    echo "Password verified";
} else {
    echo  "Password not verified";
}
