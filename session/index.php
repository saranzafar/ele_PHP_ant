<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="text" id="username" name="username" placeholder="Enter your username"> <br>
        <input type="password" id="password" name="password" placeholder="Enter your password"> <br>
        <input type="submit" name="login" value="Login"> <br> <!-- Changed to submit -->
    </form>
</body>

</html>

<?php
if (isset($_POST["login"])) {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        // echo $_SESSION["username"] . "<br>";
        // echo $_SESSION["password"] . "<br>";
        header("Location: home.php");
    } else {
        echo "Please fill the form";
    }
}
?>