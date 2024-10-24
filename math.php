<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sending form data</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="quantity">x: </label>
        <input type="text" name="quantity" id="quantity"><br /><br />
        <label for="y">y: </label>
        <input type="text" name="y" id="y"><br /><br />
        <label for="y">z: </label>
        <input type="text" name="z" id="z"><br /><br />
        <!-- <label for="quantity">quantity: </label>
        <input type="text" name="quantity" id="quantity"><br /><br /> -->
        <!-- <label for="password">password: </label>
        <input type="password" name="password" id="password"><br /><br /> -->
        <input type="submit" name="total" id="total"><br /><br />

        <!-- <button type="submit">Submit</button> -->
    </form>

</body>

</html>

<?php
// echo $_GET["username"] . "<br/>";
// echo "{$_GET["username"]} <br/>";
// echo "{$_GET["password"]} <br/>";

// echo "{$_POST["quantity"]} <br/>";
// echo "{$_POST["password"]} <br/>";

// $item = "pizza";
// $price = 5.99;
// $quantity = $_POST["quantity"];
// $total  = null;
// $total = $quantity * $price;

// echo "You have ordered {$quantity} x {$item}/s <br/>";
// echo "Your total is \${$total}";


// math functions 
$x = $_POST["quantity"];
$y = $_POST["y"];
$z = $_POST["z"];
$total  = null;

// absolute function 
// $total = abs($x);
// $total = round($x);
// $total = round($x, 2);
// $total = ceil($x);
// $total = pow($x, $y);
// $total = sqrt($x);
// $total = max($x, $y, $z);
// $total = min($x, $y, $z);
// $total = pi();
// $total = rand();
$total = rand(1, 6); //including 1 and 6

echo $total
?>