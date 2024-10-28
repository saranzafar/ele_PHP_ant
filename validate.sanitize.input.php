<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="text" name="username" id="username" placeholder="Enter username">
        <input type="number" name="age" id="age" placeholder="Enter age">
        <input type="email" name="email" id="email" placeholder="Enter email">
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>
<?php
if (isset($_POST["login"])) {
    //filter special characters - input sanitization
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    //validate email - validate input
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if (empty($age)) {
        echo "That number wasn't valid";
    } else {
        echo "Your email is: {$email}";
    }


    echo "Name ", $username;
    echo "email ", $email;
    echo "age ", $age;
}
?>