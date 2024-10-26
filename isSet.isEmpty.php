<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="username">Enter name: </label>
        <input type="text" name="username" id="username"><br><br>

        <label for="password">Enter password: </label>
        <input type="password" name="password" id="password">

        <input type="submit" value="login" name="login">

    </form>
</body>

</html>

<?php

foreach ($_POST as $key => $value) {
    echo "{$key} = {$value} <br>";
}

/*
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username)) {
        echo "Username is missing";
    } else if (empty($password)) {
        echo "Password is missing";
    } else {
        echo "Hello {$username}";
    }
}
*/
?>