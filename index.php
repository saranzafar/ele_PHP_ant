<?php

$age = true;

if ($age < 0) {
    echo "You are 18+";
} elseif ($age == 0 || $age == 1) {
    echo "You are just born";
} elseif ($age = true && $age == NAN) {
    echo "Hey true";
} else {
    echo "you are in else";
}

$ourVar = "b";
switch ($ourVar) {
    case 'A':
        echo "Hey A";
        break;
    case 'B':
        echo "Hey B";
        break;

    default:
        echo "Hey B";
        break;
}

$date = date("l");
echo " {$date}";
