<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "businessdb";
$conn = "";
try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    echo "Connected to db";
} catch (mysqli_sql_exception) {
    echo "Could not connect";
}

// if ($conn) {
//     echo "you are connected";
// } else {
//     echo "connection failed";
// }
