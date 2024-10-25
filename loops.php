<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="a">Var-1: </label>
        <input type="text" name="a" id="a">

        <input type="submit" value="start">

    </form>
</body>

</html>

<?php
$counter = $_POST["a"];

// echo "hello";

for ($i = 0; $i < $counter; $i++) {
    echo $i . "<br>";
}

$a = 1;
while ($a <= 10) {
    echo "A = {$a}" . "<br>";
    $a++;
}
