<?php include("database.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Welcome to Fakebook</h2>
        <input type="text" name="user" placeholder="Enter username"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="register" value="Register"><br>
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($username)) {
        echo "Please enter a username.";
    } else if (empty($password)) {
        echo "Please enter a password.";
    } else {
        // Hash the password
        $hash = password_hash($password, PASSWORD_DEFAULT);

        // Adjust the column names here if necessary
        if ($stmt = mysqli_prepare($conn, "INSERT INTO users (user, passowrd) VALUES (?, ?)")) {
            mysqli_stmt_bind_param($stmt, "ss", $username, $hash);
            if (mysqli_stmt_execute($stmt)) {
                echo "Now you are registered.";
            } else {
                echo "Error: Could not execute query.";
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Error: Could not prepare query.";
        }
    }
}
mysqli_close($conn);
?>