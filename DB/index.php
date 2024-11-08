<?php
include("database.php");

// insert data into table
/*
$username = "userfour";
$password = "userfour";
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user,passowrd) 
        VALUES ('$username','$hash')";
try {
    mysqli_query($conn, $sql);
    echo "User is registered";
} catch (mysqli_sql_exception) {
    echo "Could not register the user";
}
*/
// $sql = "SELECT * FROM users WHERE user = 'userfour'";
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['id'], " ";
        echo $row['user'], " ";
        echo $row['reg_date'], " ";
        echo "<br>";
    }
} else {
    echo "No user found";
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Connection</title>
</head>

<body>
    hello
</body>

</html>